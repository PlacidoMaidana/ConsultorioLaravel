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
    function nuevo()  {      
        return view("obra_social.nuevo");
        
    }
    function persistir(Request $request)  {    
        //dd($request->nombreOSocial);  

        $os=new obras_social;
        $os->nombreOSocial=$request->nombreOSocial;
        $os->save();

        return redirect('/obra_social');
        
    }



    function editar( $id)  {             

        $os= obras_social::find($id);       
        return view("obra_social.update",compact(['os']));        
    }
    function guardar_cambios(Request $request)  {    
        //dd($request->nombreOSocial);  

        $os=obras_social::find($request->id);
        $os->nombreOSocial=$request->nombreOSocial;
        $os->save();

        return redirect('/obra_social');
        
    }
    function eliminar($id)  {    
        $os=obras_social::find($id);
        $os->delete();
        
        return redirect('/obra_social');
        
    }

}
