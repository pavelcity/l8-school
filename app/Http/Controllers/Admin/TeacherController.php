<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    
	#index
	public function index () {
		$teachers = Teacher::latest()->get();
		return view ('admin.teacher.index', compact('teachers'));
	}







}
