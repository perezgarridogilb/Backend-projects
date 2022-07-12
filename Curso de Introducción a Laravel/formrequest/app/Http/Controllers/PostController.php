<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * PostRequest va a realizar de forma automática nuestra validación
     * Ayuda a que nuestro sistema este libre de cualquier validación colocada 
     * en los métodos Controller de forma manual
     * 
     * Aislar la lógica de por ejemplo Save e Update en diferente validación
     * 
     * Se esperan controladores limpios
     * 
     */
    public function store(PostRequest $request)
    {
        /**
         * Validación
         */
        dd($request->all());
    }
}
