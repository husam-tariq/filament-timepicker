<?php

namespace EslamRedaDiv\FilamentTimePicker\Forms\Components;

use Closure;
use Filament\Forms\Components\Concerns;
use Filament\Forms\Components\Field;
use Filament\Schemas\Components\Contracts\HasAffixActions;
use Filament\Support\Concerns\HasExtraAlpineAttributes;

class TimePickerField extends Field implements HasAffixActions
{
    use Concerns\HasAffixes;
    use Concerns\HasExtraInputAttributes;
    use Concerns\HasPlaceholder;
    use Concerns\CanBeReadOnly;
    use HasExtraAlpineAttributes;
    protected string $view = 'filament-timepicker::components.time-picker-field';

    protected string $okLabel = 'Ok';

    protected string $cancelLabel = 'Cancel';


    protected function setUp(): void
    {
        $this->suffixIcon("heroicon-o-clock", true);
        parent::setUp();
    }

    /**
     * @param  array  $cancelLabel
     * @return TimePickerField
     */
    public function cancelLabel(string $cancelLabel): TimePickerField
    {
        $this->cancelLabel = $cancelLabel;

        return $this;
    }

    /**
     * @return string  $cancelLabel
     */
    public function getCancelLabel()
    {
        return $this->cancelLabel;
    }

    /**
     * @param  array  $okLabel
     * @return TimePickerField
     */
    public function okLabel(string $okLabel): TimePickerField
    {
        $this->okLabel = $okLabel;

        return $this;
    }

    /**
     * @return string  $okLabel
     */
    public function getOkLabel()
    {
        return $this->okLabel;
    }





}
