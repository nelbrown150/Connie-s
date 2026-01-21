<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/experiencia', function () {
    return view('experiences');
})->name('experiences');