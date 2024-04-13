<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->name('pages.welcome');


Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('pages.gallery');

Route::get('/about', function () {
    return view('pages.about');
})->name('pages.about');

