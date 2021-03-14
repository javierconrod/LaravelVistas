<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class CrearController extends Controller
{
    //
    function index(Request $request){
    
        Notas::create([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content'),
            
        ]);
        return redirect('/notas');
    }
}
