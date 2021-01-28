<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function(){ 
    Route::get('paciente', 'App\Http\Controllers\PacienteController@index');
    Route::post('paciente', 'App\Http\Controllers\PacienteController@create');
    Route::put('paciente/{id}', 'App\Http\Controllers\PacienteController@update');
    Route::delete('paciente/{id}', 'App\Http\Controllers\PacienteController@destroy');
    Route::get('exame', 'App\Http\Controllers\ExameController@index');
    Route::post('exame', 'App\Http\Controllers\ExameController@create');
    Route::put('exame/{id}', 'App\Http\Controllers\ExameController@update');
    Route::delete('exame/{id}', 'App\Http\Controllers\ExameController@destroy');
});
