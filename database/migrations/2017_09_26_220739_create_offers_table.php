<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auctions_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('cost');
            $table->integer('teams_id')->unsigned();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
//            $table->foreign('teams_id')->references('id')->on('teams');
            $table->foreign('auctions_id')->references('id')->on('auctions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
