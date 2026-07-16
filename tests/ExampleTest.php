<?php

use EslamRedaDiv\FilamentTimePicker\Forms\Components\TimePickerField;

it('configures a Filament 5 time picker field', function () {
    $field = TimePickerField::make('from_hour')
        ->okLabel('Confirm')
        ->cancelLabel('Dismiss');

    expect($field)
        ->toBeInstanceOf(TimePickerField::class)
        ->and($field->getSuffixIcon())->toBe('heroicon-o-clock')
        ->and($field->getOkLabel())->toBe('Confirm')
        ->and($field->getCancelLabel())->toBe('Dismiss');
});
