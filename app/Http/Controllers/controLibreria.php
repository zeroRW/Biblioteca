<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorLibreria;
use Illuminate\Http\Request;

class controLibreria extends Controller
{
    public function procesoLibro(validadorLibreria $req){

        return redirect('formulario')->with('correcto','incorrecto');

    }

    public function Principal(){
        return view('principal');
    }

    public function Registro(){
        return view('registro');
    }

    public function welcome(){
        return view('welcome');
    }
}
