## Filament Time Picker

<div align="center">
    <img src="https://github.com/husam-tariq/filament-timepicker/blob/main/images/timepicker.jpg" alt="">
</div>


```sh
composer require husam-tariq/filament-timepicker
```

publish views

```sh
php artisan vendor:publish --tag="filament-timepicker-views"
```

publish config

```sh
php artisan vendor:publish --tag="filament-timepicker-config" 
```

```php
use HusamTariq\FilamentTimePicker\Forms\Components\TimePickerField;

TimePickerField::make('from_hour')->label('time')->okLabel("Confirm")->cancelLabel("Cancel"),
```
