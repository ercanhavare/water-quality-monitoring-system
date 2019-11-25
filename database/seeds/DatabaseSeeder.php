<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TurtlesTableSeeder::class);
        $this->call(UserTurtlesTableSeeder::class);
        $this->call(TurtleSensorsDataTableSeeder::class);

    }
}
