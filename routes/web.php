<?php

// routes/web.php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Future Admin Route
Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
});
