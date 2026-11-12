# syntax=docker/dockerfile:1

# ---------------------------------------------------------------------------
# Composer dependencies (cached independently of application code)
# ---------------------------------------------------------------------------
FROM composer:2 AS vendor

WORKDIR /app

COPY composer.json composer.lock ./

RUN --mount=type=cache,target=/tmp/composer-cache \
    COMPOSER_CACHE_DIR=/tmp/composer-cache \
    composer install \
        --no-dev \
        --no-interaction \
        --no-scripts \
        --no-autoloader \
        --prefer-dist \
        --ignore-platform-reqs

# ---------------------------------------------------------------------------
# Front-end assets (Vite + Tailwind)
# ---------------------------------------------------------------------------
FROM node:24-alpine AS assets

WORKDIR /app

COPY package.json package-lock.json .npmrc ./

RUN --mount=type=cache,target=/root/.npm npm ci

COPY vite.config.js ./
COPY resources ./resources
COPY public ./public

# Tailwind scans the pagination views referenced by resources/css/app.css.
COPY --from=vendor /app/vendor/laravel/framework/src/Illuminate/Pagination/resources/views \
    ./vendor/laravel/framework/src/Illuminate/Pagination/resources/views

RUN mkdir -p storage/framework/views \
    && npm run build

# ---------------------------------------------------------------------------
# Runtime image
# ---------------------------------------------------------------------------
FROM php:8.5-fpm-alpine AS app

RUN apk add --no-cache nginx supervisor libpq libzip icu-libs \
    && apk add --no-cache --virtual .build-deps \
        $PHPIZE_DEPS \
        postgresql-dev \
        libzip-dev \
        icu-dev \
    && docker-php-ext-install -j"$(nproc)" pdo_pgsql pdo_mysql intl zip \
    && apk del .build-deps \
    && cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

ENV APP_ENV=production \
    APP_DEBUG=false \
    LOG_CHANNEL=stderr

COPY composer.json composer.lock ./
COPY --from=vendor /app/vendor ./vendor

COPY . .
COPY --from=assets /app/public/build ./public/build

# Generate the optimized autoloader (after app code is present), discover
# packages, and publish Filament's CSS/JS into public/.
RUN composer dump-autoload \
        --no-dev \
        --no-interaction \
        --optimize \
        --classmap-authoritative \
        --no-scripts \
    && php artisan package:discover --ansi \
    && php artisan filament:assets --ansi \
    && rm -f /usr/bin/composer \
    && mkdir -p \
        storage/framework/cache/data \
        storage/framework/sessions \
        storage/framework/views \
        storage/logs \
        bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Server configuration
COPY conf/php/docker-vars.ini /usr/local/etc/php/conf.d/zz-docker-vars.ini
COPY conf/php/www-overrides.conf /usr/local/etc/php-fpm.d/zz-overrides.conf
COPY conf/nginx/nginx-site.conf /etc/nginx/http.d/default.conf
COPY conf/supervisor/supervisord.conf /etc/supervisord.conf
COPY conf/start.sh /usr/local/bin/start.sh

RUN chmod +x /usr/local/bin/start.sh

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=5s --start-period=20s --retries=3 \
    CMD wget -q -O /dev/null "http://127.0.0.1:${PORT:-80}/up" || exit 1

CMD ["/usr/local/bin/start.sh"]
