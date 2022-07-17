<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        /**
         * Código necesario para que siempre que se refresque se creen estos datos de prueba
         * 1. Cuatro usuarios
         * 2. Que se creen treinta posts
         */
        factory(App\User::class, 4)->create();
        factory(App\Post::class, 30)->create();
    }
}
