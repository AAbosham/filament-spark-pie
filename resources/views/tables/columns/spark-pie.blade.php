<x-filament-sparkpie::sparkpie
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