<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player, App\Models\Game, App\Models\GamePlayer,App\Models\Club, DB;

class PlayerController extends Controller
{
    /****Create player***/
    public function create(){
        $clubs = Club::all();
        return view('player.add')->with(compact('clubs'));
    }
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

    /****list all players***/
    public function listing(){
        $players = Player::paginate(); 
        return view('player.list')->with(compact('players'));
    }

     /****Read a  player***/
     public function read($id){
        $player = Player::with(['won','loss'])->withCount(['won','loss'])->where('id',$id)->first(); 
        $arrayId = array($id);  
        $win_black = DB::table('games')
                    ->select(DB::raw('COUNT(games.id) AS count'))
                    ->join('game_players', 'games.id', '=', 'game_players.game_id')
                    ->whereIn('player_won',   $arrayId)
                    ->whereIn('game_players.player',  $arrayId)
                    ->where('game_players.color','black')
                    ->groupBy('player_won')
                    ->first();
                    
        $win_white = DB::table('games')
                    ->select(DB::raw('COUNT(games.id) AS count'))
                    ->join('game_players', 'games.id', '=', 'game_players.game_id')
                    ->whereIn('player_won',   $arrayId)
                    ->whereIn('game_players.player',  $arrayId)
                    ->where('game_players.color','white')
                    ->groupBy('player_won')
                    ->first();            
         $bestgame = GamePlayer::with('game')
                    ->whereIn('player',   $arrayId)
                    ->where('moves', DB::raw("(Select MIN(moves) from game_players where player = ".$id.")"))
                    ->first();
         
        return view('player.read')->with(compact('player','win_white','win_black','bestgame'));
    }
}
