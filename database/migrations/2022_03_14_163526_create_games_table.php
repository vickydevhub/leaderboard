<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
           
           
            $table->unsignedBigInteger('player_won');
            $table->unsignedBigInteger('player_loss');
            $table->char('name', 255);
            $table->char('status', 255)->default('pending')->comment('pending,win,loss,draw');
           
            $table->foreign('player_loss')->references('id')->on('players');
            $table->foreign('player_won')->references('id')->on('players');
           
           
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
        Schema::dropIfExists('games');
    }
};
