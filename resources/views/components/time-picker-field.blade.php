<x-dynamic-component :component="$getFieldWrapperView()" :id="$getId()" :label="$getLabel()" :label-sr-only="$isLabelHidden()" :helper-text="$getHelperText()"
    :hint="$getHint()" :hint-icon="$getHintIcon()" :required="$isRequired()" :state-path="$getStatePath()">

    <div class="relative flex items-center justify-start">


        <input {{ $isDisabled() ? 'disabled' : '' }}

        x-ref="timePicker"
        type="time"
        x-data="mdtimepicker($refs.timePicker,{
            state:  $wire.entangle('{{ $getStatePath() }}').defer,
            config: {
                okLabel: '{{ $getOkLabel() }}',
                cancelLabel: '{{ $getCancelLabel() }}',

            },
        })" x-init="init()" wire:model.defer="{{ $getStatePath() }}"
               @class([
                   'time-input-picker bg-white relative w-full border py-2 pl-3 pr-10 rtl:pl-10 rtl:pr-3 text-start cursor-default rounded-lg shadow-sm',
                   'focus-within:ring-1 focus-within:border-primary-500 focus-within:ring-inset focus-within:ring-primary-500' => !$isDisabled(),
                   'dark:bg-gray-700' => config('forms.dark_mode'),
                   'border-gray-300' => !$errors->has($getStatePath()),
                   'dark:border-gray-600' =>
                       !$errors->has($getStatePath()) && config('forms.dark_mode'),
                   'border-danger-600' => $errors->has($getStatePath()),
                   'dark:border-danger-400' =>
                       $errors->has($getStatePath()) && config('forms.dark_mode'),
                   'opacity-70' => $isDisabled(),
                   'dark:text-gray-300' => $isDisabled() && config('forms.dark_mode'),
               ]) >
        <span
                class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none rtl:right-auto rtl:left-0 rtl:pl-2">
            <svg @class([
                'w-5 h-5 text-gray-400',
                'dark:text-gray-400' => config('forms.dark_mode'),
            ]) xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
        </span>
    </div>
</x-dynamic-component>
