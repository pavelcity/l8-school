<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomePageController;




# роуты сайта
Route::get('', [HomePageController::class, 'index'])->name('home.page');










#админка

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
