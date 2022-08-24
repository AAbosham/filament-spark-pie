<?php

namespace AAbosham\FilamentSparkPie;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentSparkPieServiceProvider extends PluginServiceProvider
{
    protected array $beforeCoreScripts = [
        'spark-pie' => __DIR__ . '/../resources/dist/js/spark-pie.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-spark-pie')
            ->hasViews();
    }
}
