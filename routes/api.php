Pr<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// profesional
Route::post('profesional/registro', 'AuthController@registroProfesional');
Route::post('profesional/login', 'AuthController@loginProfesional');
Route::post('profesional/borrar', 'AuthController@EliminarProfesional');
Route::post('profesional/logout', 'AuthController@logoutProfesional');

// paciente
Route::post('paciente/registro', 'AuthController@registroPaciente');
Route::post('paciente/login', 'AuthController@loginPaciente');
Route::post('paciente/logout', 'AuthController@logoutPaciente');

// pacientes
Route::ApiResource('pacientes', 'PacienteController');
// profesionales
Route::ApiResource('profesional', 'ProfesionalController');
// estudios
Route::ApiResource('estudio', 'EstudioController');
// equipos
Route::ApiResource('equipos', 'EquipoController');
// mediciones
Route::ApiResource('medicion', 'MedicionController');
// calculos
Route::get('media/{id}', 'CalculosController@media');
// insert medidas
Route::post('paciente/medida', 'InsertController@carga');
