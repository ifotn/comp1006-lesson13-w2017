<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// link to the Album Model for CRUD
use App\Album;

// home page
Route::get('/', function () {
    return view('welcome');
});

// albums page
Route::get('/albums', function() {
    $albums = Album::orderBy('title', 'asc')->get();

    // display the albums.blade.php view
   return view('albums', [
       'albums'=>$albums
   ]);
});

// add an album
Route::get('/albums/add', function() {
   return view('add-album');
});

// save a new album
Route::post('/albums/add', function() {
    // show home page just for now
    return view('welcome');
});
