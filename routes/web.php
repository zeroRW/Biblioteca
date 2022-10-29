<?php

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
Route::get('formulario',[controLibreria::class, 'registro'])->name('form');

Route::post('guardarLibro', [controLibreria::class, 'procesoLibro'])->name('re');