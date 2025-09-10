@php
    $isPrefixInline = $isPrefixInline();
    $isSuffixInline = $isSuffixInline();
    $prefixActions = $getPrefixActions();
    $prefixIcon = $getPrefixIcon();
    $prefixLabel = $getPrefixLabel();
    $suffixActions = $getSuffixActions();
    $suffixIcon = $getSuffixIcon();
    $suffixLabel = $getSuffixLabel();
    $isDisabled = $isDisabled();
@endphp
<x-dynamic-component :component="$getFieldWrapperView()" :id="$getId()" :label="$getLabel()" :label-sr-only="$isLabelHidden()" :helper-text="$getHelperText()"
    :hint="$getHint()" :hint-icon="$getHintIcon()" :required="$isRequired()" :state-path="$getStatePath()" :field="$field">

    <x-filament::input.wrapper
        :disabled="$isDisabled"
        :inline-prefix="$isPrefixInline"
        :inline-suffix="$isSuffixInline"
        :prefix="$prefixLabel"
        :prefix-actions="$prefixActions"
        :prefix-icon="$prefixIcon"
        :prefix-icon-color="$getPrefixIconColor()"
        :suffix="$suffixLabel"
        :suffix-actions="$suffixActions"
        :suffix-icon="$suffixIcon"
        :suffix-icon-color="$getSuffixIconColor()"
        :valid="! $errors->has($getStatePath())"
        :attributes="\Filament\Support\prepare_inherited_attributes($getExtraAttributeBag())"
    >


        <input {{ $isDisabled ? 'disabled' : '' }} type="time" x-ref="timePicker" x-data="mdtimepicker($refs.timePicker, {
                okLabel: '{{ $getOkLabel() }}',
                cancelLabel: '{{ $getCancelLabel() }}',
                format: 'hh:mm:ss',
                timeFormat: 'hh:mm:ss',
                events: {
                    timeChanged: function(data, timepicker) {
                        @this.set('{!! $getStatePath() !!}', data.time);
                    },

                }
            },

        )"

            {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}" @class([
                'time-input-picker fi-input block w-full border-none bg-transparent text-base text-gray-950 outline-none transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6',

            ])>
        </x-filament::input.wrapper>
</x-dynamic-component>

