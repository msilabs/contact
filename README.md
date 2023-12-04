# Contact : Laravel Package

This will send email to admin and save contact query in database.

## Get Started

> **Requires [Laravel 10](https://github.com/laravel/laravel)**

Install `msilabs/contact` via the [Composer](https://getcomposer.org/) package manager:

```bash
composer require msilabs/contact
```

Optionally, publish the configuration file:

```bash
php artisan vendor:publish --provider="Msilabs\Contact\ContactServiceProvider"
```

Migrate the migration file.

```bash
php artisan migrate
```

Start local server.

```bash
php artisan serve
```

Visit `/contact` url

```
/contact
```
