<?php

namespace Casimirorocha\Laraglide;

use Casimirorocha\Laraglide\Commands\LaraglideCommand;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasAssets()
            ->hasRoute('laraglide')
            ->hasViewComponents('laraglide')
            ->hasCommand(LaraglideCommand::class)
            ->hasInstallCommand(function(InstallCommand $command) {
                $command->startWith(function(InstallCommand $command) {
                        $command->info('Hello, and welcome to my great new package!');
                    })
                    ->publishConfigFile()
                    ->publishAssets()
                    ->publishMigrations()
                    ->copyAndRegisterServiceProviderInApp()
                    ->askToStarRepoOnGitHub('casimirorocha/laraglide')
                    ->endWith(function(InstallCommand $command) {
                        $command->info('Have a great day!');
                    });
            });
    }

    public function boot(): void
    {
        parent::boot();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laraglide');
    }
}
