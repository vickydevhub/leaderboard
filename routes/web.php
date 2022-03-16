<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController, App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController,  App\Http\Controllers\LeaderBoardController;

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
Route::get('/', [LeaderBoardController::class, 'index']);
 
//club
Route::prefix('club')->group(function () {
     

    Route::get('/add', function () {
        return view('club.add');
    });
   
 
    Route::controller(ClubController::class)->group(function () { 
        Route::post('/store', 'store')->name('club.store');
        Route::get('/list',  'listing')->name('club.list');
    });
     //update
     Route::get('/read/{id}', function () {

        return view('club.read');
    })->name('club.read'); 

});
//players
Route::prefix('player')->group(function () {
   
    
    Route::controller(PlayerController::class)->group(function () { 

        //create
       
        Route::get('/add', 'create'); 
        
        Route::post('/store', 'store')->name('player.store');

        Route::post('/update', 'update')->name('player.update');

         //list 
        Route::get('/list', 'listing')->name('player.list');

        //update
    Route::get('/read/{id}' ,'read')->name('player.read'); 
    });
    
    
     //delete
     Route::get('/delete/{id}', function () {
         
        return view('player.delete');
    });
});
//games
Route::prefix('game')->group(function () {
    
    Route::controller(GameController::class)->group(function () { 
        Route::post('/store', 'store')->name('game.store');

        Route::post('/update', 'update')->name('game.update');

        //list
        
        Route::get('/list', 'listing')->name('game.list');
        
    //create
    
    Route::get('/add', 'create');
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