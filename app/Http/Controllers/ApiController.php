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
    public function getFilmByLanguage($languageId){
        $language= Language::find($languageId);
        return $language->film()->paginate();
    }

    //Peliculas por año de lanzamiento
    public function getFilmByYear(){
        $film = Film ::orderBy('release_year','DESC')->paginate();
        return $film;
    }

    //Peliculas por "calificacion".
    public function getFilmByRentalRate(){
        $film = Film ::orderBy('rental_rate','DESC')->paginate();
        return $film;
    }

    public function updateImage(){
        $image= "https://institutolap.com/sites/ilap-internacional/files/636055955513037869162211565_movie.jpg";
        return Film::whereNull('image')->update(array('image' => $image));
        
    }

    


    
    

    


    
}
