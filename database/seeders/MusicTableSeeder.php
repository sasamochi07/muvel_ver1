<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('music')->insert([
                'provider_id'    => $i,
                'music_path'     => '/music/samplemusic' .$i .'.mp3', //音楽ファイルの保存の仕方
                'music_name'           => 'テストname' .$i,
                'music_image_path'  => '/music_image' .$i .'.jpeg',
                'music_description'=> 'こちらはテストのディスクリプションです' .$i,
                'emotion_id' => $i,
                'country_id' => $i,
                'area_id' => $i,
                'genre_id' => $i,
                'category_id' => $i,
                'deleted_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
