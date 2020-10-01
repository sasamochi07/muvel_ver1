<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'country' => 'Japan',
            ],
            [
                'country' => 'United States',
            ],
            [
                'country' => 'United Kingddom',
            ],
            [
                'country' => 'China',
            ],
            [
                'country' => 'Korea',
            ],
            [
                'country' => 'Thai',
            ],
            [
                'country' => 'Trukey',
            ],
            [
                'country' => 'Spain',
            ],
            [
                'country' => 'France',
            ],
            [
                'country' => 'Germany',
            ],
        ]);
    }
}
