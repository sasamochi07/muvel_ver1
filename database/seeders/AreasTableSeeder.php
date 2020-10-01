<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'area' => 'Tokyo',
            ],
            [
                'area' => 'New York',
            ],
            [
                'area' => 'London',
            ],
            [
                'area' => 'Beijing',
            ],
            [
                'area' => 'Soul',
            ],
            [
                'area' => 'Bangkok',
            ],
            [
                'area' => 'Istanbul',
            ],
            [
                'area' => 'Madrid',
            ],
            [
                'area' => 'Pari',
            ],
            [
                'area' => 'Berlin',
            ],
        ]);
    }
}
