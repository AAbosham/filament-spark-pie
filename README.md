# This is my package filament-spark-pie

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aabosham/filament-spark-pie.svg?style=flat-square)](https://packagist.org/packages/aabosham/filament-spark-pie)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/aabosham/filament-spark-pie/run-tests?label=tests)](https://github.com/aabosham/filament-spark-pie/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/aabosham/filament-spark-pie/Check%20&%20fix%20styling?label=code%20style)](https://github.com/aabosham/filament-spark-pie/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/aabosham/filament-spark-pie.svg?style=flat-square)](https://packagist.org/packages/aabosham/filament-spark-pie)

Pie chart for laravel filament

## Preview

![preview](https://github.com/aabosham/filament-spark-pie/raw/master/preview.png)

## Installation

You can install the package via composer:

```bash
composer require aabosham/filament-spark-pie
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-spark-pie-views"
```
## Usage

### On your filament resource file
```php
use AAbosham\FilamentSparkPie\Tables\Columns\SparkPieColumn;
```

### On your filament form schema
```php
        SparkPieColumn::make('rate')
            ->size(70) // height
            ->color('green') // green , #598989
            ->suffix('%') // or prefix
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [AAbosham](https://github.com/AAbosham)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
