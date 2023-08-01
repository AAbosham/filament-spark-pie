# This is my package filament-spark-pie

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aabosham/filament-spark-pie.svg?style=flat-square)](https://packagist.org/packages/aabosham/filament-spark-pie)
<!-- [![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/aabosham/filament-spark-pie/run-tests?label=tests)](https://github.com/aabosham/filament-spark-pie/actions?query=workflow%3Arun-tests+branch%3Amain) -->
<!-- [![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/aabosham/filament-spark-pie/Check%20&%20fix%20styling?label=code%20style)](https://github.com/aabosham/filament-spark-pie/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain) -->
[![Total Downloads](https://img.shields.io/packagist/dt/aabosham/filament-spark-pie.svg?style=flat-square)](https://packagist.org/packages/aabosham/filament-spark-pie)

Pie chart for laravel filament

## Preview

![preview](https://github.com/aabosham/filament-spark-pie/raw/master/preview.png)

## Installation

You can install the package via composer:

For filament v3
```bash
composer require aabosham/filament-spark-pie:"^2.0"
```

For filament v2
```bash
composer require aabosham/filament-spark-pie:"^0.0.4"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-spark-pie-views"
```
## Usage

## Table

### On your filament resource file
```php
use AAbosham\FilamentSparkPie\Tables\Columns\SparkPieColumn;
```

### On your filament table schema
```php
use AAbosham\FilamentSparkPie\Tables\Columns\SparkPieColumn;

SparkPieColumn::make('rate')
    ->size(70) // height
    ->color('green') // green , #598989
    ->suffix('%') // or prefix
```


## Infolist (Only for filament v3)

### On your filament Infolist schema
```php
use AAbosham\FilamentSparkPie\Infolists\Components\SparkPieEntry;

SparkPieEntry::make('rate')
    ->size(70) // height
    ->color('green') // green , #598989
    ->suffix('%') // or prefix
```

![preview-entry](https://github.com/aabosham/filament-spark-pie/raw/master/preview-entry.png)

## Credits

- [AAbosham](https://github.com/AAbosham)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
