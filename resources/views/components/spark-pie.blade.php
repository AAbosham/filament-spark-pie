@props([
    'value' => null,
    'trackColor' => '#C0C0C0',
    'scaleColor' => '#C0C0C0',
    'barColor' => 'blue',
    'size' => 70,
    'lineWidth' => 4,
    'chartLabel' => null,
    'prefix' => null,
    'suffix' => null,
])

<div class="flex justify-center">
    <div x-data="{
        init: function() {
            var chart = new FilamentSparkPie($refs.sparkPie, {
                trackColor: '{{ $trackColor }}',
                scaleColor: '{{ $scaleColor }}',
                barColor: '{{ $barColor }}',
                size: {{ $size }},
                lineWidth: {{ $lineWidth }},
            });

            chart.update({{ $value }})
        }
    }" wire:ignore wire:key="{{ str()->random(10) }}" data-percent="{{ $value }}"
        class="my-2 filament-spark-pie-column">
        <div x-ref="sparkPie">
            <div class="absolute text-xs text-center"
                style="line-height: {{ $size }}px; width:{{ $size }}px;">
                @if (filled($suffix))
                    <span>{{ $suffix }}</span>
                @endif

                <span>{{ $label ?? $value }}</span>

                @if (filled($prefix))
                    <span>{{ $prefix }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
