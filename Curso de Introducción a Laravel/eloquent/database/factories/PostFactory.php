<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        /**
         * Molde->Seeder
         * 
         * Quiero que se creen y se llenen correctamente el campo de usuarios
         * Números aleatorios de uno a cuatro (son el número de usuarios que tenemos en nuestra Base de Datos)
         */
        'user_id' => rand(1, 4),
        /** */
        'title' => $faker->sentence
    ];
});
