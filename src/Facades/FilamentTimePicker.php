<?php

namespace EslamRedaDiv\FilamentTimePicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EslamRedaDiv\FilamentTimePicker\FilamentTimePicker
 */
class FilamentTimePicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \EslamRedaDiv\FilamentTimePicker\FilamentTimePicker::class;
    }
}
