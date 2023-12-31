<?php

namespace Stamper\Console\Commands;

// use Stamper\Library\StamperHelper;
// use Stamper\Models\Stamper;
// use Stamper\Models\StamperSetting;
// use Carbon\Carbon;
use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stamper:example';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Заготовка команды stamper';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {

        $this->info("stamper - Команда выполнена");
    }
}
