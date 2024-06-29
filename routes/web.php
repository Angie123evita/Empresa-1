<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services/{valido?}', function ($valido=null) {
    return view('services',['valido' => $valido]);
})->where('valido', '[A-Za-z]+')->name('servicios');

Route::get('/projects/{valido?}', function ($valido=null) {
    return view('projects',['valido' => $valido]);
})->where('valido', '[A-Za-z]+')->name('proyectos');

Route::get('/customers/{valido?}', function ($valido=null) {
    return view('customers',['valido' => $valido]);
})->where('valido', '[A-Za-z]+')->name('clientes');

Route::get('/blog/{valido?}', function ($valido=null) {
    return view('blogs',['valido' => $valido]);
})->where('valido', '[0-9]+')->name('blogs');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contactos');

//Route::get('/personas', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/personas/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::get('/personas', [PersonasController::class, 'index'])->name('personas');
Route::get('/personas/crear', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/personas', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/personas/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::get('/personas', [PersonasController::class, 'index'])->name('personas');
Route::get('/personas/{id}/editar', [PersonasController::class, 'edit'])->name('personas.edit');
Route::patch('/personas/{id}/update', [PersonasController::class, 'update'])->name('personas.update');
Route::delete('/personas/{persona}', [PersonasController::class, 'destroy'])->name('personas.destroy');