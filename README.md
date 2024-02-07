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
Get and install the
[debugger bar](https://packagist.org/packages/barryvdh/laravel-debugbar)



DB
create database called ´sysappv2´ with ´utf8mb4_general_ci´ Collation

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sysappv2
DB_USERNAME=root
DB_PASSWORD=
```
Create tables
```sh
php artisan migrate
```
