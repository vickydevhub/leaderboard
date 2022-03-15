<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Store a new Game.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([ 
            'name' => 'required', 
            'first_player' => 'required',
            'second_player' => 'required',
            'club_id' => 'required',
        ]);
        $name = $request->name;
        $game_data = $request->all();
         
        Game::updateOrCreate(['name' => $name],$game_data);
        return redirect()
                        ->route('game.list')
                        ->with('message','Game created successfully');
         
    }
}
