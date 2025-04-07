<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services/{service}', function ($service) {
    return view('services-details', ['service' => $service]);
})->name('services.details');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


