<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('provider_id')->comment('プロバイダーID');
            $table->string('music_name')->comment('音楽の名前');
            $table->string('music_path')->comment('音楽のパス');
            $table->string('music_image_path')->comment('音楽の画像のパス');
            $table->string('music_description')->comment('音楽の詳細説明');
            $table->unsignedInteger('emotion_id')->comment('感情のID');
            $table->unsignedInteger('country_id')->comment('国のID');
            $table->unsignedInteger('area_id')->comment('地域のID');
            $table->unsignedInteger('genre_id')->comment('ジャンルのID');
            $table->unsignedInteger('category_id')->comment('カテゴリーのID');
            $table->softDeletes(); //論理削除された際に'deleted_at'を自動追記するためのカラム
            $table->timestamps(); //created_at,updated_atが自動追記されるようなカラム
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music');
    }
}
