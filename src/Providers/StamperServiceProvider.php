<?php

namespace Stamper\Providers;

use App\Console\Commands\CreatePackage;
use Illuminate\Support\ServiceProvider;

class StamperServiceProvider extends ServiceProvider
{

    private $copyList = [

        'migrations'  => 'migrations',
        'Controllers' => 'Http/Controllers/Stamper',
        'views'       => 'views/stamper',
        'js'          => 'js/stamper',
    ];



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

        //$this->loadRoutesFrom(__DIR__.'/../routes/stamper.php');

        foreach ($this->copyList as $key => $pathTo) {

            $pathFrom = $pathPackege.'copy/' . $key;

            if (file_exists($pathFrom)) {
                $this->publishes([
                    $pathFrom => database_path($pathTo),
                ], 'public');
            }

        }


        /*
    $this->publishes([
    __DIR__ . '/../copy/Controllers/Stamper' => app_path('Http/Controllers'),
    ], 'public');
     */

    }

}
