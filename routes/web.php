<?php

use App\Http\Controllers\controladorBD;
use App\Http\Controllers\controLibreria;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [controLibreria::class, 'welcome']);
Route::get('index',[controLibreria::class, 'principal'])->name('Inicio');

//Route::get('formulario',[controLibreria::class, 'registro'])->name('form');
//Route::get('auto', [controLibreria::class, 'aautores'])->name('AU');

//Route::post('guardarLibro', [controLibreria::class, 'procesoLibro'])->name('re');

//Route::post('guardarAutor', [controLibreria::class, 'procesoAutores'])->name('autor');

//RUTAS REGISTRAR LIBRO
Route::get('libro/create',[controladorBD::class, 'create'])->name('libro.create');

Route::post('libro', [controladorBD::class, 'store'])->name('libro.store');

Route::get('consulLi', [controladorBD::class, 'index'])->name('consuli.index');

//RUTAS CONSULTAR LIBROS
Route::get('libro/{id}/edit', [controladorBD::class, 'edit'])->name('libro.edit');

//RUTAS REGISTRAR AUTOR
Route::get('autor/createA',[controladorBD::class, 'createA'])->name('autor.createA');

Route::post('autor', [controladorBD::class, 'store2'])->name('autor.store2');

Route::get('consulAu', [controladorBD::class, 'index2'])->name('consulau.index2');

