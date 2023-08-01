<?php

namespace AAbosham\FilamentSparkPie\Infolists\Components;

use AAbosham\FilamentSparkPie\Concerns\HasSparkPie;
use Filament\Infolists\Components\Concerns\HasAffixes;
use Filament\Infolists\Components\Entry;

class SparkPieEntry extends Entry
{
    use HasSparkPie;
    use HasAffixes;

    protected string $view = 'filament-spark-pie::infolists.components.spark-pie';
}
