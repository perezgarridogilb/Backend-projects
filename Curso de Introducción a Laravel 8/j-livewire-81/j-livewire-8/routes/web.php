<?php

use Illuminate\Support\Facades\Route;
/** Nuevo en laravel 8 */
use App\Http\Controllers\PageController;

/* Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('curso', [PageController::class, 'course'])->name('course'); */
Route::controller(App\Http\Controllers\PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/curso/{course:slug}', 'course')->name('course');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
