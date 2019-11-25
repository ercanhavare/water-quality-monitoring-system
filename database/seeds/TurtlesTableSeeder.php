<?php

use App\Turtle;
use Illuminate\Database\Seeder;

class TurtlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Turtle::class, 1)->create();
    }
}
