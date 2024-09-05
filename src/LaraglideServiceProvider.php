<?php

namespace Casimirorocha\Laraglide;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Casimirorocha\Laraglide\Commands\LaraglideCommand;

class LaraglideServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laraglide')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('laraglide')
            ->hasCommand(LaraglideCommand::class)
            ->hasViewComponents('laraglide');
    }

    public function boot(): void
    {
        parent::boot();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laraglide');
    }
}
