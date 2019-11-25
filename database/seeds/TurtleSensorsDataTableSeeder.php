<?php

use App\TurtleSensorsData;
use Illuminate\Database\Seeder;

class TurtleSensorsDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TurtleSensorsData::class, 50)->create();
    }
}
