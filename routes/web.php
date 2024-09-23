<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    echo 'ini halaman pertama';
});


Route::get('/', function () {
    return view('home');
})->name('home');
