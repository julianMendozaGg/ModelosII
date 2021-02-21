<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Language;

class ApiController extends Controller
{

    public function getLanguage(request $request){
        return Language::pluck('name');
    }


    
}
