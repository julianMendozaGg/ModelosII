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

Route::get('/get-actor-by-id/{actorName}','ActorController@getActorIdByName');
Route::get('/get-language','ApiController@getLanguage');
Route::get('/search-film/{title}', 'FilmController@getFilmTitle');
Route::get('/search-one-film/{title}', 'FilmController@getOneFilm');
//Route::get('/film/{searchBy}', 'FilmController@show')->name('film.show');
Route::resource('/film','FilmController');
Route::resource('/actor','ActorController');

Route::get('/get-film-by-language/{language}','ApiController@getFilmByLanguage');
Route::get('/get-film-by-year','ApiController@getFilmByYear');
Route::get('/get-film-by-rental-rate','ApiController@getFilmByRentalRate');
Route::get('/update-image','ApiController@updateImage');
Route::get('/update-language', 'ApiController@updateLanguage');
