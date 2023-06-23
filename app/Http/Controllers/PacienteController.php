<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pacientes;

class PacienteController extends Controller
{
    function index() {
        $pacientes=pacientes::all();

        return view("pacientes.index",compact(['pacientes']));
        
    }
}
