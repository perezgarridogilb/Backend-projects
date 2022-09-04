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
    return view('home');
});

/* Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'Laravel' => 'PHP', 'slug' => 'laravel']
];
    return view('blog', ['posts' => $posts]);
}); */

Route::get('blog', function () {
    // consulta en base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP',     'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];

    return view('blog', ['posts' => $posts]);
});

/* Route::get('blog/{slug}', function ($slug) {
    /* Consulta a Base de Datos 
    $post = $slug;

    return view('post', ['post' => $post]);
}); */

Route::get('blog/{slug}', function ($slug) {
    // consulta en base de datos con el slug
    $post = $slug;

    return view('post', ['post' => $post]);
});

Route::get('buscar', function (Request $request) {
    /* Consulta a Base de Datos */
    return $request->all();
});
