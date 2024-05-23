<?php

namespace HusamTariq\FilamentTimePicker;

use Composer\InstalledVersions;
use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use HusamTariq\FilamentTimePicker\Commands\FilamentTimePickerCommand;
use HusamTariq\FilamentTimePicker\Testing\TestsFilamentTimePicker;

class FilamentTimePickerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-timepicker';
    private static string $version = 'dev';


    public static string $viewNamespace = 'filament-timepicker';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                   // ->publishConfigFile()
                    ->askToStarRepoOnGitHub('husam-tariq/filament-timepicker');
            });

        $configFileName = $package->shortName();

       /*  if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }
 */
        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void
    {
    }

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );

        // Icon Registration
        FilamentIcon::register($this->getIcons());

        // Handle Stubs
       /*  if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__ . '/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/filament-timepicker/{$file->getFilename()}"),
                ], 'filament-timepicker-stubs');
            }
        }
 */
        // Testing
        Testable::mixin(new TestsFilamentTimePicker());
    }

    protected function getAssetPackageName(): ?string
    {
        return 'husam-tariq/filament-timepicker';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        static::$version = InstalledVersions::getVersion('husam-tariq/filament-timepicker');
        $assetId = $this->getAssetPackageName() . static::$version;
        return [
            // AlpineComponent::make('filament-timepicker', __DIR__ . '/../resources/dist/components/filament-timepicker.js'),
            Css::make($assetId, __DIR__ . '/../resources/dist/filament-timepicker.css'),
            Js::make($assetId, __DIR__ . '/../resources/dist/filament-timepicker.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [
            FilamentTimePickerCommand::class,
        ];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [];
    }
}
