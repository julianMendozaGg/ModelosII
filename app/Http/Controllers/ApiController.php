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



    
    

    


    
}
