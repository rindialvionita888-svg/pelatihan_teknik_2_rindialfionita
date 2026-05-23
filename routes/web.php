<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController; 

Route::get('/', function () {
    return view('home');
})->name('home'); 

Route::get('/detail', function () {
    $data_portofolio = \App\Models\Portofolio::all(); 
    return view('detail-produk', compact('data_portofolio'));
})->name('detail');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');
Route::get('/portofolio/create', [PortofolioController::class, 'create'])->name('portofolio.create');
Route::post('/portofolio/store', [PortofolioController::class, 'store'])->name('portofolio.store');
Route::get('/portofolio/{id}/edit', [PortofolioController::class, 'edit'])->name('portofolio.edit');
Route::put('/portofolio/{id}', [PortofolioController::class, 'update'])->name('portofolio.update');
Route::delete('/portofolio/{id}', [PortofolioController::class, 'destroy'])->name('portofolio.destroy');