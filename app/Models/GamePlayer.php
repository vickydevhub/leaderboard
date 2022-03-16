<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePlayer extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['game_id', 'player','color','moves'
      ];

    /**
     * Get the club associated with the player.
     */
    public function player()
    {
        return $this->hasOne(Player::class,'id','player');
    }
 
    /**
     * Get the club associated with the player.
     */
    public function game()
    {
        return $this->hasOne(Game::class,'id','game_id');
    }
}
