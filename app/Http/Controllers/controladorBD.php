<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorAutores;
use App\Http\Requests\validadorLibreria;
use App\Models\tb_autores;
use App\Models\tb_libros;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class controladorBD extends Controller
{

    public function index()
    {
        $ConsultaRec = DB::table('tb_libros')->get();

        return view('consultarLibros', compact('ConsultaRec'));
        
    }

    public function index2()
    {
        $ConsultaAA = DB::table('tb_autores')->get();

        return view('consultarAutores', compact('ConsultaAA'));
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
        $consultaID = DB::table('tb_libros')->where('idLibros', $id)->first();
        $categorias = tb_autores::all();
        return view('editarLibro', compact('consultaID', 'categorias'));
    }

    public function edit2($id){
        $consultaIDD = DB::table('tb_autores')->where('idAutores', $id)->first();
        return view('editarAutor', compact('consultaIDD'));
    }


    public function update(validadorLibreria $req, $id)
    {
        DB::table('tb_libros')->where('idLibros', $id)->update([

            "titulo"=> $req->input('Titulo'),
            "ISBN"=> $req->input('isbn'),
            "paginas"=> $req->input('Paginas'),
            "autor_id"=> $req->input('Autor'),
            "editorial"=> $req->input('Edit'),
            "email"=> $req->input('Email'),
            "updated_at"=> Carbon::now(),

        ]);

        return redirect('consulLi')->with('actuali', 'bca');
    }

    public function update2(validadorAutores $req, $id)
    {
        DB::table('tb_autores')->where('idAutores', $id)->update([

            "nombre"=> $req->input('name'),
            "fechaNacimiento"=> $req->input('fechaNacimiento'),
            "librosPublicados"=> $req->input('libros'),
            "updated_at"=> Carbon::now(),

        ]);

        return redirect('consulAu')->with('actualizar', 'abc');
    }

    public function eliminar($id)
    {
        $consultaEL = DB::table('tb_autores')->where('idAutores', $id)->first();

        return view('eliminarAutor', compact('consultaEL'));
    }

    public function destroy($id)
    {
        DB::table('tb_autores')->where('idAutores', $id)->delete();

        return redirect('consulAu')->with('eliminado', 'cba');
    }

    public function eliminar2($id)
    {
        $consultaEL2 = DB::table('tb_libros')->where('idLibros', $id)->first();

        return view('eliminarLibro', compact('consultaEL2'));
    }

    public function destroy2($id)
    {
        DB::table('tb_libros')->where('idLibros', $id)->delete();

        return redirect('consulLi')->with('borrado', 'cba');
    }
}
