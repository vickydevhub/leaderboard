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
    protected $fillable = ['club_id','name', 'status','player_won','player_loss'  ];

     /**
     * Get the club associated with the player.
     */
    public function club()
    {
        return $this->hasOne(club::class,'id','club_id');
    }

    /**
     * Get the club associated with the player.
     */
    public function players()
    {
        return $this->hasMany(GamePlayer::class,'id','game_id');
    }

     
    /**
     * Get the second Player associated with the game.
     */
    public function playerWon()
    {
        return $this->hasOne(Player::class,'id','player_won');
    }

     
}
