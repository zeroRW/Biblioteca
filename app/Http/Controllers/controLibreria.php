<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorLibreria;
use Illuminate\Http\Request;

class controLibreria extends Controller
{
    public function procesoLibro(validadorLibreria $req){

        if ($req -> isMethod('POST')){
            $t = $req -> input('Titulo');

            session() -> flash('ti', $t);

            return redirect('formulario')->with('correcto','incorrecto');
        }


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
