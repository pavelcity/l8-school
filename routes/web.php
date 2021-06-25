<?php

use Illuminate\Support\Facades\Route;


# роуты сайта
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ContactController as Contact;
use App\Http\Controllers\AboutController as About;
use App\Http\Controllers\StudentsController as Students;
use App\Http\Controllers\TeacherController as Teacher;


# роуты админки
use App\Http\Controllers\Admin\AdminkaController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\ShedulerController;



#роуты админки преподавателей
use App\Http\Controllers\Lkteacher\LkteacherController;
use App\Http\Controllers\Lkteacher\ShedulerController as LkTeacherSheduler;



 


Route::get('', [HomePageController::class, 'index'])->name('home.page');


#contact page
Route::get('contact', [Contact::class, 'index'])->name('contact.home');

#about page
Route::get('about', [About::class, 'index'])->name('about.home');

#students page
Route::get('students', [Students::class, 'index'])->name('student.home');

#teacher page
Route::name('teachers.')->prefix('teachers/')->group(function(){
	Route::get('', [Teacher::class, 'index'])->name('home');
	Route::get('{slug}', [Teacher::class, 'detail'])->name('detail');
});





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


	#Teachers
	Route::name('teacher.')->prefix('teacher/')->group(function () {
		Route::get('', [TeacherController::class, 'index'])->name('home');
		Route::get('create', [TeacherController::class, 'create'])->name('create');
		Route::post('store', [TeacherController::class, 'store'])->name('store');
		Route::get('{id}/edit', [TeacherController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [TeacherController::class, 'update'])->name('update');
		Route::get('{id}/delete', [TeacherController::class, 'delete'])->name('delete');
	});

	#Расписание
	Route::name('sheduler.')->prefix('sheduler/')->group(function () {
		Route::get('', [ShedulerController::class, 'index'])->name('home');
		Route::get('create', [ShedulerController::class, 'create'])->name('create');
		Route::post('store', [ShedulerController::class, 'store'])->name('store');
		Route::get('{id}/edit', [ShedulerController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [ShedulerController::class, 'update'])->name('update');
		Route::get('{id}/delete', [ShedulerController::class, 'delete'])->name('delete');
	});

});




#админка преподавателей
Route::name('dashteacher.')->prefix('dashteacher/')->namespace('Lkteacher')->group(function(){
	Route::get('', [LkteacherController::class, 'index'])->name('home');

	
	#Расписание
	Route::name('teachersheduler.')->prefix('teachersheduler/')->group(function () {
		Route::get('', [LkTeacherSheduler::class, 'index'])->name('home');
		Route::get('create', [LkTeacherSheduler::class, 'create'])->name('create');
		Route::post('store', [LkTeacherSheduler::class, 'store'])->name('store');
		Route::get('{id}/edit', [LkTeacherSheduler::class, 'edit'])->name('edit');
		Route::post('{id}/update', [LkTeacherSheduler::class, 'update'])->name('update');
		Route::get('{id}/delete', [LkTeacherSheduler::class, 'delete'])->name('delete');
	});


});









Route::get('logoutadminka', [AdminkaController::class, 'logoutAdminka'])->name('admin.logout');

Route::fallback(function () {
	abort(404);
});



