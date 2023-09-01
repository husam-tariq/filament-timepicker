<?php

namespace HusamTariq\FilamentTimePicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HusamTariq\FilamentTimePicker\FilamentTimePicker
 */
class FilamentTimePicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \HusamTariq\FilamentTimePicker\FilamentTimePicker::class;
    }
}
