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
            $table->unsignedBigInteger('club_id');
            $table->unsignedBigInteger('first_player');
            $table->unsignedBigInteger('second_player');
            $table->char('name', 255);
            $table->char('status', 255)->default('pending')->comment('pending,win,loss,draw');
            $table->char('first_player_color', 255)->nullable();
            $table->char('second_player_color', 255)->nullable();
            $table->integer('first_player_moves')->default(0);
            $table->integer('second_player_moves')->default(0);
            $table->foreign('second_player')->references('id')->on('players');
            $table->foreign('first_player')->references('id')->on('players');
            $table->foreign('club_id')->references('id')->on('clubs');
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
