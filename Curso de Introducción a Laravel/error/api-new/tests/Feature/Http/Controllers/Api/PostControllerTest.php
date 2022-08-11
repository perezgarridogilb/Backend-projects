<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store() {

        $this->withoutExceptionHandling();
        $response = $this->json('POST', '/api/posts', [
            'title' => 'El post de prueba'
        ]);

        $response->assertJsonStructure(['id', 'title', 'created_at', 'updated_at'])
            ->assertJson(['title' => 'El post de prueba'])
            ->assertStatus(201); //OK, creado un recurso

        $this->assertDatabaseHas('posts', ['title' => 'El post de prueba']);
    }

    // public function test_validate_title(){

    //     /** 
    //      * Validando que la solicitud no se completó correctamente
    //      */
    //     $response = $this->json('POST', '/api/posts', [
    //         'title' => ''
    //     ]);

    //     $response->assertStatus(422) /* Estatus 422 */
    //     /** Recibiendo un Json que incluye que el título no está correcto */    
    //         ->assertJsonValidationErrors('title');

    // }
}
