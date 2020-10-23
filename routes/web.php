<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\VisitanteController;
use App\Http\Controllers\FuncionarioController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Estudiantes/create',[EstudiantesController::class,'create']);
Route::get('/Funcionario/create',[FuncionarioController::class,'create']);
Route::get('/Visitante/create',[VisitanteController::class,'create']);
Route::get('/Encuesta',[EncuestaController::class,'create']);
Route::get('/Encuesta',[EncuestaController::class,'index']);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
