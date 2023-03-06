# Login Info Package

[![Latest Version](https://img.shields.io/github/release/zahidhasan566/loginInfoPackage.svg?style=flat-square)](https://github.com/zahidhasan566/loginInfoPackage/releases)

[//]: # ([![Total Downloads]&#40;https://img.shields.io/packagist/packages/zahid566/logininfo.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/zahid566/logininfo&#41;)

##This will help you to save user's login information in database

## System Architecture

- Laravel Version 10.x
- php 8.1

## Features
- Keep tracking users activity .
- Users's IP address will be saved. 
- Current status of the user will be saved as an active user.
- Last login time will be stored. 


## Installation

```
composer require zahid566/logininfo
```

Migration: After successfully installing the package, migration file need to be run .
```
php artisan migrate
```

## After publishing the migrate file, add the service provider in provider section. Config -> app.php file
```

LoginInfo\loginInfoServiceProvider::class,
```

## Before rendering the home page, write the code in controller
Use library : LoginInfo\Http\Controllers\LoginInfoController;
```

$objLoginInfoClass = new LoginInfoController();
$user_id = Auth::id();
$objLoginInfoClass->index($user_id);
```
