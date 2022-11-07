<?php

namespace AAbosham\FilamentSparkPie\Tables\Columns;

use Closure;
use Filament\Tables\Columns\Column;

class SparkPieColumn extends Column
{
    protected string $view = 'filament-spark-pie::tables.columns.spark-pie';

    protected string | Closure $trackColor = '#C0C0C0';

    protected string | Closure $scaleColor = '#C0C0C0';

    protected string | Closure $barColor = ''; // default color will be bg-primary-600 if not found will return #ef1e25

    protected int | Closure $size = 70;

    protected int | Closure $lineWidth = 4;

    protected string | int | Closure | null $chartLabel = null;

    protected string | Closure | null $prefix = null;

    protected string | Closure | null $suffix = '%';

    public function trackColor(string | Closure $trackColor): static
    {
        $this->trackColor = $this->evaluate($trackColor);

        return $this;
    }

    public function getTrackColor(): string
    {
        return $this->evaluate($this->trackColor);
    }

    public function scaleColor(string | Closure $scaleColor): static
    {
        $this->scaleColor = $scaleColor;

        return $this;
    }

    public function getScaleColor(): string
    {
        return $this->evaluate($this->scaleColor);
    }

    public function barColor(string | Closure $barColor): static
    {
        $this->barColor = $barColor;

        return $this;
    }

    public function color(string | Closure $barColor): static
    {
        $this->barColor($barColor);

        return $this;
    }

    public function getBarColor(): string
    {
        return $this->evaluate($this->barColor);
    }

    public function size(int | Closure $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): int
    {
        return $this->evaluate($this->size) ?? 70;
    }

    public function lineWidth(int | Closure $lineWidth): static
    {
        $this->lineWidth = $lineWidth;

        return $this;
    }

    public function getLineWidth(): int
    {
        return $this->evaluate($this->lineWidth) ?? 4;
    }

    public function chartLabel(string | Closure $chartLabel): static
    {
        $this->chartLabel = $chartLabel;

        return $this;
    }

    public function getChartLabel(): string | int | null
    {
        return $this->evaluate($this->chartLabel) ?? $this->getState();
    }

    public function prefix(string | Closure | null $prefix): static
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getPrefix(): string | int | null
    {
        return $this->evaluate($this->prefix);
    }

    public function suffix(string | Closure | null $suffix): static
    {
        $this->suffix = $suffix;

        return $this;
    }

    public function getSuffix(): string | int | null
    {
        return $this->evaluate($this->suffix);
    }
}
