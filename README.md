# Filament 3.x Time Picker


[![Latest Version on Packagist](https://img.shields.io/packagist/v/husam-tariq/filament-timepicker.svg?style=flat-square)](https://packagist.org/packages/husam-tariq/filament-timepicker)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/husam-tariq/filament-timepicker/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/husam-tariq/filament-timepicker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/husam-tariq/filament-timepicker/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/husam-tariq/filament-timepicker/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/husam-tariq/filament-timepicker.svg?style=flat-square)](https://packagist.org/packages/husam-tariq/filament-timepicker)


![Filament 3.x Time Picker](img/main.jpg)


## Installation

You can install the package via composer:

```bash
composer require husam-tariq/filament-timepicker
```



Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-timepicker-views"
```


## Usage

```php
use HusamTariq\FilamentTimePicker\Forms\Components\TimePickerField;

TimePickerField::make('from_hour')->label('time')->okLabel("Confirm")->cancelLabel("Cancel"),
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Hussam Tariq](https://github.com/husam-tariq)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
