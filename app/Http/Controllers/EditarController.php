<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class EditarController extends Controller
{
    //
    function index($id){
        $notas = Notas::find($id);//DB::table('notas') ->where('id', $id) ->first();
    
        return view('editar', ['notas' => $notas]);
    }
}
