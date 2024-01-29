<?php

namespace SebastiaanKloos\FilamentCodeEditor;

use Filament\Facades\Filament;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;

class FilamentCodeEditorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-code-editor');
    }

    public function bootingPackage()
    {

        FilamentAsset::register([
            Js::make('code-mirror', __DIR__.'/../dist/filament-tools.js'),
        ]);

    }
}
