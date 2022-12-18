## Filament Time Picker

<div align="center">
    <img src="https://github.com/husam-tariq/filament-timepicker/blob/main/images/timepicker.jpg" alt="">
</div>


```sh
composer require husam-tariq/filament-timepicker
```

publish assets

```sh
php artisan vendor:publish --tag="filament-timepicker-views"
```
```php
use HusamTariq\FilamentTimePicker\Forms\Components\TimePickerField;

TimePickerField::make('from_hour')->label('time')->format('h:mm tt')->timeFormat('hh:mm:ss.000')->okLabel("Confirm")->cancelLabel("Cancel"),
```
