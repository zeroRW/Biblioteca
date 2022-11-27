<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorAutores;
use App\Http\Requests\validadorLibreria;
use App\Models\tb_autores;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class controladorBD extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        $categorias = tb_autores::all();
        return view('registro', compact('categorias'));
    }

    public function createA()
    {
        return view('autores');
    }


    public function store(validadorLibreria $req)
    {
        DB::table('tb_libros')->insert([
            "titulo"=> $req->input('Titulo'),
            "ISBN"=> $req->input('isbn'),
            "paginas"=> $req->input('Paginas'),
            "autor_id"=> $req->input('Autor'),
            "editorial"=> $req->input('Edit'),
            "email"=> $req->input('Email'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]
        );
        

        if ($req -> isMethod('POST')){
            $t = $req -> input('Titulo');

            session() -> flash('ti', $t);

            return redirect('libro/create')->with('correcto','incorrecto');
        }
    }

    public function store2(validadorAutores $req)
    {

        DB::table('tb_autores')->insert([
            "nombre"=> $req->input('name'),
            "fechaNacimiento"=> $req->input('fechaNacimiento'),
            "librosPublicados"=> $req->input('libros'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]
        );

        if ($req -> isMethod('POST')){
            $autoor = $req -> input('name');

            session() -> flash('ti', $autoor);

        return redirect('autor/createA')->with('hecho','nohecho');
        }

    }


    public function show($id)
    {
    
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
