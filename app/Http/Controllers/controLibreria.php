<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorAutores;
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

    public function procesoAutores(validadorAutores $req){
        if ($req -> isMethod('POST')){
            $autoor = $req -> input('name');

            session() -> flash('ti', $autoor);

        return redirect('auto')->with('hecho','nohecho');
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

    public function aautores(){
        return view('autores');
    }

}
