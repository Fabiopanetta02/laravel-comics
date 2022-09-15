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

Route::get('/movies', function () {

    return view('movies');
})->name('movies');
