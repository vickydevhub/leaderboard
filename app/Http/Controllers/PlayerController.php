<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([ 
            'name' => 'required', 
            'email' => 'required',
            'contact_number' => 'required',
            'club_id' => 'required',
        ]);
        $email = $request->email;
        $player_data = $request->all();
         
        Player::updateOrCreate(['email' => $email],$player_data);
        return redirect()
                        ->route('player.list')
                        ->with('message','Player created successfully');
         
    }
}
