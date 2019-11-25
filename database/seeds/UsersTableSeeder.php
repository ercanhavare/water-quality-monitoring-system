<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'full_name'=>'Ercan Havare',
            'email'=>'admin@alagadi.site',
            'password'=>bcrypt('Alagadi2019'),
            'mobile_phone'=>'05000000000',
            'address'=>'Cyprus',
            'type'=>'admin',
            'status'=>'1'
        ]);

        DB::table('users')->insert([
            'full_name'=>'Ercan Havare',
            'email'=>'user@alagadi.site',
            'password'=>bcrypt('Alagadi2019'),
            'mobile_phone'=>'05000000000',
            'address'=>'Cyprus',
            'type'=>'admin',
            'status'=>'1'
        ]);
    }
}
