<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController, App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use App\Models\Club, App\Models\Player, App\Models\Game;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('leaderboard');
})->name('leaderboard');
//club
Route::prefix('club')->group(function () {
     //list
     $clubs = Club::paginate(); 
     Route::get('/list', function ()  use($clubs) {
         return view('club.list')->with(compact('clubs'));
     })->name('club.list');

    Route::get('/add', function () {
        return view('club.add');
    });
   
 
    Route::controller(ClubController::class)->group(function () { 
        Route::post('/store', 'store')->name('club.store');
    });
     //update
     Route::get('/read/{id}', function () {

        return view('club.read');
    })->name('club.read'); 

});
//players
Route::prefix('player')->group(function () {
    //list
    $players = Player::paginate(); 
    Route::get('/list', function () use($players) {
        return view('player.list')->with(compact('players'));
    })->name('player.list');
    //create
    $clubs = Club::all();
    Route::get('/add', function () use($clubs) {
        return view('player.add')->with(compact('clubs'));
    }); 
    Route::controller(PlayerController::class)->group(function () { 
        Route::post('/store', 'store')->name('player.store');

        Route::post('/update', 'update')->name('player.update');
    });
    //update
    Route::get('/read/{id}', function () {

        return view('player.read');
    })->name('player.read'); 
    
     //delete
     Route::get('/delete/{id}', function () {
         
        return view('player.delete');
    });
});
//games
Route::prefix('game')->group(function () {
    //list
    $games = Game::paginate(); 
    Route::get('/list', function ()  use($games) {
        return view('game.list')->with(compact('games'));
    })->name('game.list');
    //create
    $clubs = Club::all();
    $players = Player::paginate(); 
    Route::get('/add', function () use($clubs, $players)  {
        return view('game.add')->with(compact('clubs','players'));
    }); 
    Route::controller(GameController::class)->group(function () { 
        Route::post('/store', 'store')->name('game.store');

        Route::post('/update', 'update')->name('game.update');
    });
    //update
    Route::get('/read/{id}', function () {

        return view('game.read');
    })->name('game.read'); 
    
     //delete
     Route::get('/delete/{id}', function () {
         
        return view('game.delete');
    });
});