@props([
    'value' => null,
    'trackColor' => '#C0C0C0',
    'scaleColor' => '#C0C0C0',
    'barColor' => 'blue',
    'size' => 70,
    'lineWidth' => 4,
    'chartLabel' => null,
    'prefix' => null,
    'suffix' => '%',
])

<div class="flex justify-center">
    <div x-data="{
        init: function() {
            var chart = new FilamentSparkPie($refs.spark-pie, {
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
        <div x-ref="spark-pie">
            <div class="absolute text-center text-xs"
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
