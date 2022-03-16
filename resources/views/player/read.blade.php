
@extends('layouts.app')
 
 @section('title', 'Player Lists')
  
 @section('sidebar')
     @parent
  
     <p>This is appended to the master sidebar.</p>
 @endsection
  
 @section('content')
  
  <h2>Player Detail</h2>
  <p>Contextual classes can be used to color table rows or table cells. .</p>
  <div class="container d-flex justify-content-center align-items-center">
    <div class="card">
         
      
        <div class="mt-5 text-center">
            <h4 class="mb-0">{{$player->name}}</h4> <span class="text-muted d-block mb-2">{{$player->email}}</span>  
            <div class="d-flex justify-content-between align-items-center mt-4 px-4">
                <div class="stats">
                    <h6 class="mb-0">Wins</h6> <span>{{$player->won_count}}</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Losses</h6> <span>{{$player->loss_count}}</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Ratio of wins with White /Black </h6> <span>{{(isset($win_white)?$win_white->count:0)}}/{{(isset($win_black)?$win_black->count:0)}}</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Best Game</h6> <span>{{$bestgame->game->name}}</span>
                </div>
            </div>
        </div>
    </div>
</div>  
 
<style>
 
 
.card {
    width: 380px;
    border: none;
    border-radius: 15px;
    padding: 8px;
    background-color: #fff;
    position: relative;
    height: 370px
}

.upper {
    height: 100px
}

.upper img {
    width: 100%;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px
}

.user {
    position: relative
}

.profile img {
    height: 80px;
    width: 80px;
    margin-top: 2px
}

.profile {
    position: absolute;
    top: -50px;
    left: 38%;
    height: 90px;
    width: 90px;
    border: 3px solid #fff;
    border-radius: 50%
}

.follow {
    border-radius: 15px;
    padding-left: 20px;
    padding-right: 20px;
    height: 35px
}

.stats span {
    font-size: 29px
}
</style>
  @endsection