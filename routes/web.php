<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('pages.gallery');
