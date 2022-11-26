<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorAutores;
use App\Http\Requests\validadorLibreria;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorLibreria $req)
    {
        DB::table('tb_libros')->insert([
            "titulo"=> $req->input('Titulo'),
            "ISBN"=> $req->input('isbn'),
            "paginas"=> $req->input('Paginas'),
            "autor"=> $req->input('Autor'),
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
