<?php

namespace Database\Seeders;

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
        $this->call([
            UsersTableSeeder::class,
            ProvidersTableSeeder::class,
            EmotionsTableSeeder::class,
            MusicTableSeeder::class,
            Countries::class,
            AreasTableSeeder::class,
            GenresTableSeeder::class,
            CategoriesTableSeeder::class,
          ]);
    }
}
