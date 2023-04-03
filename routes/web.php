<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



/**
 * Rotas via método GET em que cada uma chama uma função no controlador
 */
Route::get('/orçamentos','App\Http\Controllers\ControladorOrcamento@index')
->name('index');
Route::get('/orçamentos/novo','App\Http\Controllers\ControladorOrcamento@create')
->name('novo');
Route::get('/orçamentos/editar/{id}','App\Http\Controllers\ControladorOrcamento@edit')
->name('editar');
Route::get('/orçamentos/excluir/{id}','App\Http\Controllers\ControladorOrcamento@destroy');
Route::get('/orçamentos/info/{id}','App\Http\Controllers\ControladorOrcamento@show');

/**
 * Rotas via método POST em que cada uma chama uma função no controlador
 */
Route::post('/orçamentos','App\Http\Controllers\ControladorOrcamento@store');
Route::post('/orçamentos/{id}','App\Http\Controllers\ControladorOrcamento@update');


