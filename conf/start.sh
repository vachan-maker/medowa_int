#!/bin/sh
set -eu

if [ -z "${APP_KEY:-}" ]; then
    echo "ERROR: APP_KEY is not set. Generate one with: php artisan key:generate --show" >&2
    exit 1
fi

PORT="${PORT:-80}"
sed -i "s/listen 80;/listen ${PORT};/" /etc/nginx/http.d/default.conf

mkdir -p \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

chown -R www-data:www-data storage bootstrap/cache

# Public URL for uploaded product/accessory images.
php artisan storage:link --force >/dev/null 2>&1 || true

# Cache configuration/routes/views now that the runtime environment is known.
php artisan optimize
php artisan filament:optimize

chown -R www-data:www-data storage bootstrap/cache

exec /usr/bin/supervisord -c /etc/supervisord.conf
