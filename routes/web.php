<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home'); 

Route::get('/detail', function () {
    return view('detail-produk');
})->name('detail');