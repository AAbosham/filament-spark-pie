<?php

namespace AAbosham\FilamentSparkPie\Tables\Columns;

use AAbosham\FilamentSparkPie\Concerns\HasSparkPie;
use Filament\Tables\Columns\Column;

class SparkPieColumn extends Column
{
    use HasSparkPie;

    protected string $view = 'filament-spark-pie::tables.columns.spark-pie';
}
