<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['club_id','name','first_player','second_player','status'];

     /**
     * Get the club associated with the player.
     */
    public function club()
    {
        return $this->hasOne(club::class,'id','club_id');
    }

     /**
     * Get the first Player associated with the game.
     */
    public function firstPlayer()
    {
        return $this->hasOne(Player::class,'id','second_player');
    }
    /**
     * Get the second Player associated with the game.
     */
    public function secondPlayer()
    {
        return $this->hasOne(Player::class,'id','first_player');
    }
}
