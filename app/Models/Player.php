<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use DB;

class Player extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['club_id','name','email','contact_number'];

     /**
     * Get the club associated with the player.
     */
    public function club()
    {
        return $this->hasOne(club::class,'id','club_id');
    }

     /**
     * Get the games won.
     */
    public function won()
    {
        return $this->hasMany(Game::class,'player_won','id');
    }
    /**
     * Get the games losses.
     */
    public function loss()
    {
        return $this->hasMany(Game::class,'player_loss','id');
    }

     

    
}
