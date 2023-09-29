<?php

namespace Stamper\Providers;

use App\Console\Commands\CreatePackage;
use Illuminate\Support\ServiceProvider;

class StamperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $pathPackege = base_path('vendor/lemoro/stamper/src/');

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Stamper\Console\Commands\ExampleCommand::class,
                \Stamper\Console\Commands\CreatePackage::class,
                \Stamper\Console\Commands\HelpCommand::class,
            ]);
        }

        $this->loadViewsFrom($pathPackege . 'resources/views', 'stamper');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        //$this->loadRoutesFrom(__DIR__.'/../routes/stamper.php');

        $this->publishFiles($pathPackege);
    }

    private function publishFiles($pathPackege)
    {
        $copyList = $this->getListPublish();

        foreach ($copyList as $key => $pathTo) {

            $pathFrom = $pathPackege . 'copy/' . $key;

            if (file_exists($pathFrom)) {
                $this->publishes([
                    $pathFrom => $pathTo,
                ], 'stamper');
            }

        }

    }

    private function getListPublish()
    {
        return [
            // 'migrations' => database_path('migrations'),
            // 'Controllers' => app_path('Http/Controllers/UpFile'),
            // 'views' => resource_path('views'),
            // 'js'    => public_path('up-file/js'),
            // 'css'   => public_path('up-file/css'),
            // 'image' => public_path('up-file/image'),
        ];
    }

}
