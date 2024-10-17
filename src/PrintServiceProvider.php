<?php

namespace PrintFilament\Print;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PrintServiceProvider extends PackageServiceProvider
{
    public static string $name = 'print';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)->hasViews()->hasConfigFile("print");
    }
}
