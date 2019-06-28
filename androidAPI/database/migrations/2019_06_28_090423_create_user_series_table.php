<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("user_id");
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer("series_id");
            $table->foreign('series_id')->references('id')->on('series');
            $table->integer("current_episode");
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
        Schema::dropIfExists('user_series');
    }
}
