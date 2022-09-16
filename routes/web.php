<?php
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
    $albums = config('comics');
    //ddd(config('albums'));
    return view('home', compact('albums'));
})->name('home');

Route::get('/{id}', function ($id) {
    $albums = config('comics');

    if (!is_numeric($id) || $id < 0 || $id >= count($albums)) {
        abort(404);
    }
    $album = $albums[$id];
    return view('show', compact('album'));
})->name('album');

Route::get('/movies', function () {

    return view('movies');
})->name('movies');

Route::get('/characters', function () {

    return view('characters');
})->name('characters');