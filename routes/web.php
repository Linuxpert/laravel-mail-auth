<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');


//------------------------------------------------------------

Route::get('/', 'GuestController@home') -> name('home');

//------------------------------------------------------------

Route::get('/api/videogames/get', 'ApiController@getVideogames') -> name('api.videogames.get');

Route::get('/api/videogame/delete/{id}', 'ApiController@deleteVideogame') -> name('api.videogame.delete');