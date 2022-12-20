# SIPA-RT | Laravel 8 + Bootstrap 4

## Features

-   Mobile Responsive Bootstrap 4 Design
-   User Management with Roles
-   Role Management
-   Permissions Management
-   Access Control List (ACL)
-   Laravel 8 + Bootstrap 4

## Tech Stack

**Client:** HTML, CSS, JavaScript, jQuery, VueJs, Bootstrap 4

**Server:** PHP, Laravel 8

**DataBase:** MySql

## Installation

Install All Packages of laravel

```bash
composer install
```

Install NPM Dependencies

```bash
npm install && npm run dev
```

Create .env file

```bash
cp .env.example .env
```

Generate Application key

```bash
php artisan key:generate
```

Update .env File with Database credentials and run migration with seed.

```bash
php artisan migrate --seed
```

All Set ! now serve laravel app on local and open app in browser.
