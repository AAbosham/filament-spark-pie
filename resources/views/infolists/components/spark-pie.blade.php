

<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <x-filament-infolists::affixes
        :prefix-actions="$getPrefixActions()"
        :suffix-actions="$getSuffixActions()"
        :attributes="
            \Filament\Support\prepare_inherited_attributes($getExtraAttributeBag())
                ->class(['fi-in-text'])
        "
    >
        <div class="flex">
            <x-filament-spark-pie::spark-pie
                :value="$getState()"
                :trackColor="$getTrackColor()"
                :scaleColor="$getScaleColor()"
                :barColor="$getBarColor()"
                :size="$getSize()"
                :lineWidth="$getLineWidth()"
                :chartLabel="$getChartLabel()"
                :prefix="$getPrefix()"
                :suffix="$getSuffix()"
                />
        </div>
    </x-filament-infolists::affixes>
</x-dynamic-component>
