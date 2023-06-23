<?php

namespace App\Http\Controllers;

use App\Models\obras_social ;
use Illuminate\Http\Request;


class ObraSocialController extends Controller
{
    //
    function index()  {

        $todas= obras_social::all();
        

        return view("obra_social.index",compact(['todas']));
        
    }
}
