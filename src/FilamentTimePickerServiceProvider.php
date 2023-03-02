<?php

namespace HusamTariq\FilamentTimePicker;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentTimePickerServiceProvider extends PluginServiceProvider
{
    protected array $styles = [
        'timepicker.min' => __DIR__ . '/../public/dist/timepicker.min.css'
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-timepicker')
            ->hasViews()
            ->hasConfigFile();
    }

    protected function getBeforeCoreScripts(): array
    {
        return [
            'jquery.min' => config('filament-timepicker.jquery_min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'),
            'timepicker' => __DIR__ . '/../public/dist/timepicker.js',
        ];
    }
}
