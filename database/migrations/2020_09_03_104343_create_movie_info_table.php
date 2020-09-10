<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_info', function (Blueprint $table) {
            $table->bigIncrements('movie_id');
            $table->string('movie_title');
            $table->string('movie_cast');
            $table->string('movie_genre');
            $table->text('movie_description');
            $table->binary('movie_poster');
            $table->string('url');
            $table->integer('release_year');
            $table->string('language');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_info');
    }
}
