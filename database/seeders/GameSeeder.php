<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game, App\Models\GamePlayer;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = array(
            array('name'=>'Game 1','status'=>'win' ,'player_one'=> 1,'player_two'=> 2, 'player_one_color' => 'white' , 'player_two_color' => 'black','player_one_moves'=>25,'player_two_moves'=>26,'player_won'=> 2,'player_loss'=>1),
            array('name'=>'Game 2' ,'status'=>'win' , 'player_one'=> 3,'player_two'=> 4, 'player_one_color' => 'black' , 'player_two_color' => 'white','player_one_moves'=>20,'player_two_moves'=>19,'player_won'=> 3,'player_loss'=>4),
            array('name'=>'Game 3' ,'status'=>'win' , 'player_one'=> 5,'player_two'=> 6, 'player_one_color' => 'black' , 'player_two_color' => 'white','player_one_moves'=>15,'player_two_moves'=>16,'player_won'=> 6,'player_loss'=>5),
            array('name'=>'Game 4' , 'status'=>'win' ,'player_one'=> 7,'player_two'=> 8, 'player_one_color' => 'white' , 'player_two_color' => 'black','player_one_moves'=>24,'player_two_moves'=>23,'player_won'=> 7,'player_loss'=>8),
            array('name'=>'Game 5' ,'status'=>'win' , 'player_one'=> 9,'player_two'=> 10, 'player_one_color' => 'black' , 'player_two_color' => 'white','player_one_moves'=>25,'player_two_moves'=>26,'player_won'=> 10,'player_loss'=>9),
            array('name'=>'Game 6' ,'status'=>'win' , 'player_one'=> 1,'player_two'=> 2, 'player_one_color' => 'white' , 'player_two_color' => 'black','player_one_moves'=>28,'player_two_moves'=>23,'player_won'=> 1,'player_loss'=>2),
            array('name'=>'Game 7' ,'status'=>'win' , 'player_one'=> 3,'player_two'=> 4, 'player_one_color' => 'white' , 'player_two_color' => 'black','player_one_moves'=>20,'player_two_moves'=>21,'player_won'=> 4,'player_loss'=>3),
            array('name'=>'Game 8' , 'status'=>'win' ,'player_one'=> 5,'player_two'=> 6, 'player_one_color' => 'black' , 'player_two_color' => 'white','player_one_moves'=>29,'player_two_moves'=>28,'player_won'=> 5,'player_loss'=>6),
            array('name'=>'Game 9' , 'status'=>'win' ,'player_one'=> 7,'player_two'=> 8, 'player_one_color' => 'white' , 'player_two_color' => 'black','player_one_moves'=>30,'player_two_moves'=>29,'player_won'=> 7,'player_loss'=>8),
            array('name'=>'Game 10' ,'status'=>'win' , 'player_one'=> 10,'player_two'=> 9, 'player_one_color' => 'black' , 'player_two_color' => 'white','player_one_moves'=>28,'player_two_moves'=>29,'player_won'=> 9,'player_loss'=>10),
        );
        foreach($games as $game){
            $game_data = array('name' => $game['name'],'status' => $game['status'],'player_won' => $game['player_won'],'player_loss' => $game['player_loss']);
             $gameInfo = Game::updateOrCreate(['name' => $game['name']],$game_data);
             if($gameInfo){
                $data_player_one = array('player' => $game['player_one'],'color' => $game['player_one_color'],'moves'=>$game['player_one_moves']);
                $data_player_two = array('player' => $game['player_two'],'color' => $game['player_two_color'],'moves'=>$game['player_two_moves']);
                 $data['game_id'] =  $gameInfo->id;
                GamePlayer::updateOrCreate(['game_id' => $gameInfo->id,'player' => $game['player_one']],$data_player_one);
                GamePlayer::updateOrCreate(['game_id' => $gameInfo->id,'player' => $game['player_two']],$data_player_two);
             }
        }
    }
}
