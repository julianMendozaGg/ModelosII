<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use App\Models\Category;

class ApiController extends Controller
{
    public function getActors(request $request){
        return Actor::paginate(6);
    }

    public function getCategory(request $request){
        $julian = Category::get();
        return $julian;
    }
}
