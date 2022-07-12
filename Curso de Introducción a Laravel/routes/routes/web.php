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

/**
 *  Se usaría en páginas estáticas, incluye parámetros
 *  Route::view('vista','welcome', ['app' =>'hola']); 
 * 
 * Route::get('Prueba', function () {
 *      return 'hola';
 * });
 * */

Route::resource('pages', 'PageController'); // 7 rutas
