<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\ProfessoresController;



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
    return view('home');
});

Route::get('registrationaluno', 'App\Http\Controllers\AlunosController@registrationAluno');
Route::get('registrationprof', 'App\Http\Controllers\ProfessoresController@registrationProf');
Route::get('registrationdisc', 'App\Http\Controllers\DisciplinasController@registrationDisc');
Route::post('insertdataaluno',  'App\Http\Controllers\AlunosController@insertDataAluno');
Route::get('alunosview',  'App\Http\Controllers\AlunosController@alunosview');
Route::post('insertdataprofessor',  'App\Http\Controllers\ProfessoresController@insertDataProfessor');
Route::get('professoresview',  'App\Http\Controllers\ProfessoresController@professoresview');
Route::post('insertdatadisc',  'App\Http\Controllers\DisciplinasController@insertDataDisciplina');
Route::get('disciplinasview',  'App\Http\Controllers\DisciplinasController@disciplinasview');
Route::get('alunoperfil/{id}','App\Http\Controllers\AlunosController@alunoPerfil');
Route::post('insertdataalunodisc',  'App\Http\Controllers\AlunoDisciplinaController@insertDataAlunoDisc');
Route::post('insertnotaaluno',  'App\Http\Controllers\AlunosController@insertNotaAluno');
