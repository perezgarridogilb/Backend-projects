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

use App\Post;

# Accediendo directamente a los datos a través del archivo que representa la tabla
Route::get('eloquent', function () {
    /* $posts = Post::all(); */
    $posts = Post::where('id', '>=', '20')
    /**
     * Descendente y que sean 3
     */
    ->orderBy('id', 'desc')
    ->take(3)
    ->get();

    foreach($posts as $post) {
        echo "$post->id $post->title <br>";
    }
});

Route::get('posts', function () {
    
    $posts = Post::get();

    foreach($posts as $post) {
        echo "
        $post->id
        <strong>{$post->user->name}</strong>
        $post->title <br>";
    }
});

use App\User;

Route::get('users', function () {
    
    $users = User::all();

    foreach($users as $user) {
        echo "
        $user->id
        <strong>{$user->name}</strong>
        {$user->posts->count()} posts<br>";
    }
});


Route::get('collections', function() {
    $users = User::all();
    /* dd($users) */
    /* dd($users->contains(4)); */
    /* dd($users->only(4)); */
    /* dd($users->find(4)); */
    /** Método posts */
    dd($users->load('posts'));

});

Route::get('serializacion', function() {
    $users = User::all();
    
    /* dd($users->toArray()); */
    $user = $users->find(1);
    dd($user->toJson());

});