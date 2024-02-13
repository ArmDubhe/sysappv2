# sysappv2

Installation
```sh
composer install
```
Configuration

```sh
cp .env.example .env 

php artisan key:generate

php artisan serve
```
DB
create database called ´sysappv2´ with ´utf8mb4_general_ci´ Collation

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sysappv2
DB_USERNAME=armando
DB_PASSWORD=arma4000
```
Create tables
```sh
php artisan migrate
```
Debugbar
Get and install the
[debugger bar](https://packagist.org/packages/barryvdh/laravel-debugbar)

Inside the file config/app.php and setup th econfoguration (check documentation)
```sh
# ServiceProvider
Barryvdh\Debugbar\ServiceProvider::class,
...
# Facades
'Debugbar' => Barryvdh\Debugbar\Facades\Debugbar::class,
....
```