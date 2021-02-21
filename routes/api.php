<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-language','ApiController@getLanguage');
Route::get('/search-film/{title}', 'FilmController@getFilmTitle');
//Route::get('/film/{searchBy}', 'FilmController@show')->name('film.show');
Route::resource('/film','FilmController');
Route::resource('/actor','ActorController');
Route::get('/get-film-by-actor','ApiController@getFilmByLanguage');
