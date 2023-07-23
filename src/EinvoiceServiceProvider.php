<?php

namespace Pratiksoni\Einvoice;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pratiksoni\Einvoice\Commands\EinvoiceCommand;

class EinvoiceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('einvoice')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_einvoice_table')
            ->hasCommand(EinvoiceCommand::class);
    }
}
