<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('app'); // ini menampilkan React
});

Route::get('/produk', function () {
    return view('produk'); // ini menampilkan React
});

// Route::get('/contact', function () {
//     return view('contact');
// });