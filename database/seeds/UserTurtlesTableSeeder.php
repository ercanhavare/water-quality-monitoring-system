<?php

use App\UserTurtle;
use Illuminate\Database\Seeder;

class UserTurtlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserTurtle::class, 50)->create();
    }
}
