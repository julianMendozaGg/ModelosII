<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Language;

class CategoryController extends Controller
{
    public function getCountry(){
        return Country::orderBy('country','desc')->get(); 
    }

}
