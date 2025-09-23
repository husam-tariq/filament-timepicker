@php
    $fieldWrapperView = $getFieldWrapperView();
    $id = $getId();
    $statePath = $getStatePath();
    $isDisabled = $isDisabled();
    $extraInputAttributeBag = $getExtraInputAttributeBag();
    $extraAlpineAttributes = $getExtraAlpineAttributes();
    $isAutofocused = $isAutofocused();
    $isPrefixInline = $isPrefixInline();
    $isSuffixInline = $isSuffixInline();
    $prefixActions = $getPrefixActions();
    $prefixIcon = $getPrefixIcon();
    $prefixLabel = $getPrefixLabel();
    $suffixActions = $getSuffixActions();
    $suffixIcon = $getSuffixIcon();
    $suffixLabel = $getSuffixLabel();
    $placeholder = $getPlaceholder();
    $isReadOnly = $isReadOnly();
    $isRequired = $isRequired();

@endphp
<x-dynamic-component :component="$fieldWrapperView" :field="$field" :inline-label-vertical-alignment="\Filament\Support\Enums\VerticalAlignment::Center">

    <x-filament::input.wrapper :disabled="$isDisabled" :inline-prefix="$isPrefixInline" :inline-suffix="$isSuffixInline" :prefix="$prefixLabel" :prefix-actions="$prefixActions"
        :prefix-icon="$prefixIcon" :prefix-icon-color="$getPrefixIconColor()" :suffix="$suffixLabel" :suffix-actions="$suffixActions" :suffix-icon="$suffixIcon" :suffix-icon-color="$getSuffixIconColor()"
        :valid="!$errors->has($statePath)" :attributes="\Filament\Support\prepare_inherited_attributes($getExtraAttributeBag())">


        <input
            {{ $extraInputAttributeBag->merge($extraAlpineAttributes, escape: false)->merge(
                [
                    'autofocus' => $isAutofocused,
                    'disabled' => $isDisabled,
                    'placeholder' => $placeholder,
                    'readonly' => $isReadOnly,
                    'required' => $isRequired && !$isConcealed,
                ],
                escape: false,
            ) }}
            type="time" x-ref="timePicker" x-data="mdtimepicker($refs.timePicker, {
                    okLabel: '{{ $getOkLabel() }}',
                    cancelLabel: '{{ $getCancelLabel() }}',
                    format: 'hh:mm:ss',
                    timeFormat: 'hh:mm:ss',
                    events: {
                        timeChanged: function(data, timepicker) {
                            $wire.set('{!! $statePath !!}', data.time);
                        },
            
                    }
                },
            
            )"
            {{ $applyStateBindingModifiers('wire:model') }}="{{ $statePath }}" @class([
                'time-input-picker fi-input block w-full border-none bg-transparent text-base text-gray-950 outline-none transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6',
            ])>
    </x-filament::input.wrapper>
</x-dynamic-component>
