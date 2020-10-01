<?php

namespace Database\Seeders;

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
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
               'user_name'           => 'TEST' .$i,
               'email'          => 'test' .$i .'@test.com',
               'password'       => 'pass' .$i,
            //    'remember_token' => str_random(10),
               'created_at'     => now(),
               'updated_at'     => now()
           ]);
       }
    }
}
