<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('homepage');
});


Route::controller(JokeController::class)->prefix('jokes')->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/{joke}/show/', 'show');
    Route::get('/{Joke}/edit/', 'edit');
    Route::put('/{joke}/update', 'update');
    Route::delete('/{joke}/destroy', 'destroy');
});
