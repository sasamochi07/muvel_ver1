<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emotions')->insert([
            [
                'emotion' => 'Happy',
            ],
            [
                'emotion' => 'Sad',
            ],
            [
                'emotion' => 'Anger',
            ],
            [
                'emotion' => 'Fun',
            ],
            [
                'emotion' => 'Ennui',
            ],
            [
                'emotion' => 'Adorable',
            ],
            [
                'emotion' => 'Nostalgic',
            ],
            [
                'emotion' => 'scared',
            ],
            [
                'emotion' => 'Brave',
            ],
            [
                'emotion' => 'Peaceful',
            ],
        ]);
    }
}
