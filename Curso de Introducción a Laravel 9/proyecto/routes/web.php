<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/* 
* Route::get | Consultar
* Route::post | Guardar
* Route::delete | Eliminar
* Route::put | Actualizar
*/

Route::get('/', function () {
    return view('Ruta home');
});

Route::get('blog', function () {
    return 'Listado de publicaciones';
});

Route::get('blog/{slug}', function ($slug) {
    /* Consulta a Base de Datos */
    return $slug;
});

Route::get('buscar', function (Request $request) {
    /* Consulta a Base de Datos */
    return $request->all();
});
