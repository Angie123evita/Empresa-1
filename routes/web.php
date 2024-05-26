<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services/{parameter?}', function ($parameter=null) {
    return view('services',['parameter' => $parameter]);
})->where('parameter', '[A-Za-z]+')->name('services.index');

Route::get('/projects/{parameter?}', function ($parameter=null) {
    return view('projects',['parameter' => $parameter]);
})->where('parameter', '[A-Za-z]+')->name('projects.index');

Route::get('/customers/{parameter?}', function ($parameter=null) {
    return view('customers',['parameter' => $parameter]);
})->where('parameter', '[A-Za-z]+')->name('customers.index');

Route::get('/blog/{parameter?}', function ($parameter=null) {
    return view('blogs',['parameter' => $parameter]);
})->where('parameter', '[0-9]+')->name('blogs.index');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts.index');

