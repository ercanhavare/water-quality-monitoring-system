<?php

namespace App\Console\Commands;

use App\Http\Controllers\TurtleSensorsDataController;
use App\Turtle;
use Illuminate\Console\Command;

class CalledTurtles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'called:turtles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Called a turtles of sensors every 30 seconds';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $turtles = Turtle::query()->select('turtle_key')->get();
        foreach ($turtles as $turtle) {
            TurtleSensorsDataController::index($turtle->turtle_key);
        }
    }
}
