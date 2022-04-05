<?php

use App\Http\Controllers\DiscordController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SpotifyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    if (Auth::user() != null) {
        return redirect(\route('room'));
    }
    return view('welcome');
})->name('welcome');

Route::get('/auth/redirect', [DiscordController::class, 'redirect'])->name('discord.redirect');
Route::get('/auth/callback', [DiscordController::class, 'callback'])->name('discord.callback');

Route::get('/auth/spotify/redirect', [SpotifyController::class, 'redirect'])
    ->middleware(['auth'])->name('spotify.redirect');
Route::get('/auth/spotify/callback', [SpotifyController::class, 'callback'])
    ->middleware(['auth'])->name('spotify.callback');

Route::get('/room', [RoomController::class, 'show'])->middleware(['auth'])->name('room');

require __DIR__.'/auth.php';
