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

    //Peliculas por nombre de "actor", IMPORTANTE: Aún falta arreglarle algo a este método preguntar Julian Xd
    public function getFilmByActor(){
        //app(ActorController::class)->getActorIdByName($actorName);
        $actor = Actor::find(1);
        return $actor->film;
        
    }

    
    

    


    
}
