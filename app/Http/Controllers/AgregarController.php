<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class AgregarController extends Controller
{
    //
    public function index(){
        return view('agregar');
    }
}
