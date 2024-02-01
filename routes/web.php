<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artists', [ArtistController::class, 'index'])->name('artists-index');
Route::get('/artists/{id}', [ArtistController::class, 'show'])->name('artists-show');

Route::get('/albums', [AlbumController::class, 'index'])->name('albums-index');
Route::get('/albums/{id}', [AlbumController::class, 'show'])->name('albums-show');
