<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'genre' => 'Spring',
            ],
            [
                'genre' => 'Summer',
            ],
            [
                'genre' => 'Autumn',
            ],
            [
                'genre' => 'Winter',
            ],
            [
                'genre' => 'Morning',
            ],
            [
                'genre' => 'Afternoom',
            ],
            [
                'genre' => 'Night',
            ],
            [
                'genre' => 'Sunset',
            ],
            [
                'genre' => 'Sunrise',
            ],
            [
                'genre' => 'Midnight',
            ],
        ]);
    }
}
