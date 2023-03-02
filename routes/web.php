<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\Calculadora\CalcularController;
use App\Http\Controllers\Contacto\AyudaController;
use App\Http\Controllers\Formularios\FormularioController as FormulariosFormularioController;
use App\Http\Controllers\Home\HomeController as HomeHomeController;
use App\Http\Controllers\Inmuebles\FormularioController;
use App\Http\Controllers\Inmuebles\InmueblesController;
use App\Http\Controllers\Inmuebles\PublicarController;
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

//ruta del home
Route::get('/', HomeHomeController::class )->name('home');


// ruta de todos los inmuebles
Route::get('Inmuebles',[InmueblesController::class, 'index'])->name('inmuebles.index');

//ruta informacion de contratis
Route::get('publicar_inmueble',[PublicarController::class, 'index'])->name('inmuebles.publicar');


//ruta para show de los inmueble
Route::get('inmueble/{popular}',[InmueblesController::class, 'show'])->name('inmuebles.show')->middleware('auth');


//ruta de formulario para publicar inmueble
Route::resource('publicar_formulario', FormulariosFormularioController::class)->names('inmuebles.formulario')->middleware('auth');

Route::post('formulario_create', [FormulariosFormularioController::class,'comodidades'])->name('formulario.comodidades');

Route::post('form_create', [FormulariosFormularioController::class,'inmueble'])->name('formulario.inmueble');

Route::post('inmueble/images', [FormulariosFormularioController::class,'files'])->name('inmueble.files');




//ruta de calculadora
Route::get('calcular',[CalcularController::class, 'index'])->name('calculadora.calcular')->middleware('auth');


//ruta de ayuda
Route::get('ayuda', [AyudaController::class, 'index'])->name('contacto.ayuda')->middleware('auth');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

