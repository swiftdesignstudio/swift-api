<?php 

namespace SwiftDesign\API;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class SwiftAPIServiceProvider extends LaravelServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {

        $this->handleConfigs();
        // $this->handleMigrations();
        // $this->handleViews();
        // $this->handleTranslations();
        // $this->handleRoutes();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        // Bind any implementations.

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {

        return [];
    }

    private function handleConfigs() {

        $configPath = __DIR__ . '/../config/swiftapi.php';

        $this->publishes([$configPath => config_path('swiftapi.php')]);

        $this->mergeConfigFrom($configPath, 'swiftapi');
    }

    // private function handleTranslations() {

    //     $this->loadTranslationsFrom(__DIR__.'/../lang', 'packagename');
    // }

    // private function handleViews() {

    //     $this->loadViewsFrom(__DIR__.'/../views', 'packagename');

    //     $this->publishes([__DIR__.'/../views' => base_path('resources/views/vendor/packagename')]);
    // }

    // private function handleMigrations() {

    //     $this->publishes([__DIR__ . '/../migrations' => base_path('database/migrations')]);
    // }

    private function handleRoutes() {

        include __DIR__.'/../routes.php';
    }
}