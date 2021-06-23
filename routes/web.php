<?php

use Illuminate\Support\Facades\Route;


# роуты сайта
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ContactController as Contact;
use App\Http\Controllers\AboutController as About;


# роуты админки
use App\Http\Controllers\Admin\AdminkaController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\StudentController;






Route::get('', [HomePageController::class, 'index'])->name('home.page');


#contact page
Route::get('contact', [Contact::class, 'index'])->name('contact.home');

#about page
Route::get('about', [About::class, 'index'])->name('about.home');





# админка
Route::name('dashboard.')->prefix('dashboard/')->namespace('Admin')->middleware(['auth:sanctum', 'verified', 'web', 'auth'])->group(function () {


	Route::get('', [AdminkaController::class, 'index'])->name('home');

	#Contact
	Route::name('contact.')->prefix('contact/')->group(function () {
		Route::get('', [ContactController::class, 'index'])->name('home');
		Route::get('create', [ContactController::class, 'create'])->name('create');
		Route::post('store', [ContactController::class, 'store'])->name('store');
		Route::get('{id}/edit', [ContactController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [ContactController::class, 'update'])->name('update');
		Route::get('{id}/delete', [ContactController::class, 'delete'])->name('delete');
	});
	
	#About
	Route::name('about.')->prefix('about/')->group(function () {
		Route::get('', [AboutController::class, 'index'])->name('home');
		Route::get('create', [AboutController::class, 'create'])->name('create');
		Route::post('store', [AboutController::class, 'store'])->name('store');
		Route::get('{id}/edit', [AboutController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [AboutController::class, 'update'])->name('update');
		Route::get('{id}/delete', [AboutController::class, 'delete'])->name('delete');
	});


	#Students
	Route::name('student.')->prefix('student/')->group(function () {
		Route::get('', [StudentController::class, 'index'])->name('home');
		Route::get('create', [StudentController::class, 'create'])->name('create');
		Route::post('store', [StudentController::class, 'store'])->name('store');
		Route::get('{id}/edit', [StudentController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [StudentController::class, 'update'])->name('update');
		Route::get('{id}/delete', [StudentController::class, 'delete'])->name('delete');
	});

});










Route::get('logoutadminka', [AdminkaController::class, 'logoutAdminka'])->name('admin.logout');

Route::fallback(function () {
	abort(404);
});



