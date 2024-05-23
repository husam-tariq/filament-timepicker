<?php

namespace HusamTariq\FilamentTimePicker\Commands;

use Illuminate\Console\Command;

class FilamentTimePickerCommand extends Command
{
    public $signature = 'filament-timepicker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
