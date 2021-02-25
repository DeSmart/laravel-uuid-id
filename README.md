# Laravel UUID 🆔

[![Latest version](https://img.shields.io/packagist/v/desmart/laravel-uuid-id.svg?style=flat)](https://github.com/DeSmart/laravel-uuid-id)
![Tests](https://github.com/desmart/laravel-uuid-id/workflows/Run%20Tests/badge.svg)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/DeSmart/laravel-uuid-id/blob/master/LICENSE)

Package provides a simple trait that allows to use UUIDs as IDs in Laravel models.

## Installation
To install the package via Composer, simply run the following command:
```
composer require desmart/laravel-uuid-id
```

## Usage
This package does two things:
* enables having UUID as an ID (by modifying some underlying Laravel model methods), and
* automatically generates ordered UUID as an ID during model creation.

In any Laravel model that should use UUID as an ID, add `HasUuidId` trait:
```php
class MyModel extends \Illuminate\Database\Eloquent\Model
{
    use \DeSmart\Laravel\Uuid\HasUuidId;
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.