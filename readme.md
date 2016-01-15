# Laravel with Angular Material
Simple and clean application using token based authentication with laravel and angular material. Easy to install and maintain.

## Description
No description at the moment.

## Contents
- [Features](#features)
- [Dependencies](#dependencies)
- [Installing](#installing)
- [Optional](#optional)

## Features
- Laravel 5.2 [releases notes](https://laravel.com/docs/5.2/releases).
- JSON Web Token Authentication.
- Basic brute force prevention
- Middleware for routes where tokens are prohibited.

## Dependencies
* [PHP](http://php.net/supported-versions.php) >= 5.5.9
* [Composer](https://getcomposer.org/)
* [npm](https://www.npmjs.com/)
* [gulp](http://gulpjs.com/)
* [bower](http://bower.io/)
* [jwt-auth](https://github.com/tymondesigns/jwt-auth/issues/89)
* [angular-material](https://material.angularjs.org/latest/)

## Installing

### Clone

Simply clone this project using the folowing command:

```
git clone https://github.com/rhberro/laravel-with-angular.git
```

### Environment

Create a .env file by copying the .env.example file with the command:

```
cp .env.example .env
```

### Install dependencies

Install dependencies with composer using composer install command:

```
composer install
```

### Packages

Install npm dependencies by typing the folowing command:

```
npm install
```

### Bower

Install angular and required libraries with bower:

```
bower install
```

### Key

Generate unique application key with artisan by typing:

```
php artisan key:generate
```

### Token

Generate a secret key for token authentication with the given command:

```
php artisan jwt:generate
```

### Migration

Build the database with laravel migrations which provides the users table with:

```
php artisan migrate --seed
```

### Run

You should now be able to serve your application with artisan and login. A database seeder provides an account for testing, but you can create your own.

### User

laravel@gmail.com / laravel

## Optional

Use the following command to generate an ide helper file with [laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper), it provides an accurate autocompletion for laravel 5:

```
php artisan ide-helper:generate
```
