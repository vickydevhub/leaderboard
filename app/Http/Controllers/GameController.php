<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game, App\Models\Club, App\Models\Player;

class GameController extends Controller
{
    /****Create player***/
    public function create(){
        $clubs = Club::all();
        $players = Player::all(); 

        return view('game.add')->with(compact('clubs','players'));
    }
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

    /****list all players***/
    public function listing(){
        $games = Game::paginate(); 
        return view('game.list')->with(compact('games'));
    }
}
