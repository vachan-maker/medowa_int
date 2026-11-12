<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

### Requirements

| Tool | Version |
| --- | --- |
| PHP | 8.3+ with `pdo_sqlite` (or `pdo_pgsql`/`pdo_mysql`), `intl`, `zip`, `mbstring`, `openssl` |
| Composer | 2.x |
| Node.js | 24.x + npm |
| Database | SQLite by default; PostgreSQL or MySQL supported |

### Setup

```bash
git clone <repository-url> medowa_int_project
cd medowa_int_project

# PHP dependencies
composer install

# Environment
cp .env.example .env
php artisan key:generate

# Database (SQLite is the default)
touch database/database.sqlite
php artisan migrate --seed

# Public storage for uploaded product/accessory images
php artisan storage:link

# Front-end assets
npm install
npm run build
```

### One-command alternative

```bash
composer setup
```

This runs `composer install`, creates `.env`, generates the key, migrates, and builds assets. It does **not** seed the database or create the storage link, so still run:

```bash
php artisan db:seed
php artisan storage:link
```

### Running locally

Start everything (web server, queue listener, logs, Vite) with:

```bash
composer dev
```

Or run the processes separately:

```bash
php artisan serve      # http://localhost:8000
npm run dev            # Vite dev server with HMR
php artisan queue:work # if processing queued jobs
```

### Admin panel

The Filament admin panel is available at:

```
http://localhost:8000/admin
```

The seeder creates an initial user:

- **Email:** `test@example.com`
- **Password:** `password`

Create another admin user with:

```bash
php artisan make:filament-user
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
