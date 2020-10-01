<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category' => 'Travel',
            ],
            [
                'category' => 'Daily',
            ],
            [
                'category' => 'Festival',
            ],
            [
                'category' => 'Party',
            ],
            [
                'category' => 'Sleep',
            ],
            [
                'category' => 'Sports',
            ],
            [
                'category' => 'Cafe',
            ],
            [
                'category' => 'Chillout',
            ],
            [
                'category' => 'Game',
            ],
            [
                'category' => 'Comic',
            ],
        ]);
    }
}
