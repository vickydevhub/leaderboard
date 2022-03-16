<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Club, App\Models\Player, App\Models\Game;
use Illuminate\Support\Facades\DB;

class LeaderBoardController extends Controller
{
    //
    public function index(){
        $games = Game::select(['player_won', DB::raw('COUNT(player_won) AS matches_won')])
                        ->groupBy('player_won')
                        ->get();
                        
        return view('leaderboard')->with(compact('games'));
    }
}
