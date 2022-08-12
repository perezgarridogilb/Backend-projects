<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Post;
use App\User;


class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store()
    {
        
        /* $this->withoutExceptionHandling(); */
        $user = factory(User::class)->create();
        /**
         * Representando que estamos logueados
         * Actuar como user, login
         * actingAs($user, 'api')->
         */
        $response = $this->actingAs($user, 'api')->json('POST', '/api/posts', [
            'title' => 'El post de prueba'
        ]);

        $response->assertJsonStructure(['id', 'title', 'created_at', 'updated_at'])
            ->assertJson(['title' => 'El post de prueba'])
            ->assertStatus(201); //OK, creado un recurso

        $this->assertDatabaseHas('posts', ['title' => 'El post de prueba']);
    }

    public function test_validate_title()
    {
        $user = factory(User::class)->create();
        /** 
         * Validando que la solicitud no se completó correctamente
         */
        $response = $this->actingAs($user, 'api')->json('POST', '/api/posts', [
            'title' => ''
        ]);

        $response->assertStatus(422) /* Estatus 422; Bien hecha, pero imposible completarla  */
            /** Recibiendo un Json que incluye que el título no está correcto */
            ->assertJsonValidationErrors('title');
    }

    public function test_show()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();


        $response = $this->actingAs($user, 'api')->json('GET', "/api/posts/$post->id");

        $response->assertJsonStructure(['id', 'title', 'created_at', 'updated_at'])
            /** Verificar que el título coincide con el Post que estoy creando */
            ->assertJson(['title' => $post->title])
            ->assertStatus(200); //OK, creado un recurso

    }

    public function test_404_show()
    {
        $user = factory(User::class)->create();
        /** Se verifica que un $post no existe */

        $post = factory(Post::class)->create();


        $response = $this->actingAs($user, 'api')->json('GET', '/api/posts/1000');

        $response->assertStatus(404); 

    }

    public function test_update()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();

        $response = $this->actingAs($user, 'api')->json('PUT', "/api/posts/$post->id", [
            'title' => 'nuevo'
        ]);


        $response->assertJsonStructure(['id', 'title', 'created_at', 'updated_at'])
            /** Verificar que se obtiene el texto nuevo */
            ->assertJson(['title' => 'nuevo'])
            ->assertStatus(200); 

        $this->assertDatabaseHas('posts', ['title' => 'nuevo']);
    }

    public function test_delete()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();

        $response = $this->actingAs($user, 'api')->json('DELETE', "/api/posts/$post->id");


        $response->assertSee(null)
            /** 
             * 204; Verificar el estatus sin contenido 
             * Con el estatus doscientos verificamos que llega al controlador
             */
            ->assertStatus(204); 

        $this->assertDatabaseMissing('posts', ['id' => $post->id]);
    }

    public function test_index()
    {
        $user = factory(User::class)->create();
        factory(Post::class, 5)->create();
        $response = $this->actingAs($user, 'api')->json('GET', "/api/posts");
        $response->assertJsonStructure([
            'data' => [
                '*' => ['id', 'title', 'created_at', 'updated_at']
            ]])->assertStatus(200);
    }

    public function test_guest()
    {
        $this->json('GET', '/api/posts')->assertStatus(401);
    }
}
