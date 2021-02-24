<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Language;
use App\Models\Actor;

class ApiController extends Controller
{

    public function getLanguage(request $request){
        return Language::pluck('name');
    }

    //Peliculas por id del idioma que se recibe por la ruta
    public function getFilmByLanguage($language){
        $language= Language::where('name', $language)->first();
        return $language->film()->paginate(6);
    }

    public function getFilmByRating($rating){
        return Film::where('rating', $rating)->paginate(6);
    }

    //Peliculas por año de lanzamiento
    public function getFilmByYear(){
        $film = Film ::orderBy('release_year','DESC')->paginate(6);
        return $film;
    }

    //Peliculas por "calificacion".
    // public function getFilmByRentalRate(){
    //     $film = Film ::orderBy('rental_rate','DESC')->paginate(6);
    //     return $film;
    // }

    public function updateImage(){
        $image= "https://institutolap.com/sites/ilap-internacional/files/636055955513037869162211565_movie.jpg";
        return Film::whereNull('image')->update(array('image' => $image));
        
    }

    //Solo utilizar esta funcion para generar datos en la base de datos
    // public function updateLanguage(){
    //      Film::inRandomOrder()->limit(150)->update(array('language_id' => 6));
    //      Film::inRandomOrder()->limit(150)->update(array('language_id' => 5));
    //      Film::inRandomOrder()->limit(150)->update(array('language_id' => 4));
    //      Film::inRandomOrder()->limit(200)->update(array('language_id' => 3));
    //      Film::inRandomOrder()->limit(150)->update(array('language_id' => 2));
    //      Film::inRandomOrder()->limit(100)->update(array('language_id' => 1));

         
    //      return 'ok';

    // }

    // public function updateLanguage(){
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 2021));
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 2015));
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 2010));
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 2005));
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 2000));
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 1990));
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 1980));
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 1970));
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 1960));
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 1950));
    //      Film::inRandomOrder()->limit(100)->update(array('release_year' => 1940));


         
    //      return 'ok';

    // }

    


    
    

    


    
}
