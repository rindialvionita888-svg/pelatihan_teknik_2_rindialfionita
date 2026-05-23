<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home'); 

Route::get('/detail', function () {
    return view('detail-produk');
})->name('detail');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
        return view('about');
    })->name('about');
    use App\Http\Controllers\PortofolioController;

Route::get('/portofolio', [PortofolioController::class, 'index']);

Route::get('/portofolio/create', [PortofolioController::class, 'create']);

Route::post('/portofolio/store', [PortofolioController::class, 'store']);

Route::get('/portofolio/{id}/edit', [PortofolioController::class, 'edit']);
Route::put('/portofolio/{id}', [PortofolioController::class, 'update']);