<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Club;
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
});
//club
Route::prefix('club')->group(function () {
    Route::get('/add', function () {
        return view('club.add');
    });
   
 
    Route::controller(Club::class)->group(function () { 
        Route::post('/store', 'store');
    });
});