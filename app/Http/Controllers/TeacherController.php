<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Users;
use App\Models\Sheduler;

class TeacherController extends Controller
{
    
	#index
	public function index () {
		$teachers = Teacher::latest()->get();
		return view ('pages.teacher.index', compact('teachers'));
	}

 
	#detail
	public function detail ($slug) {
		$teacher = Teacher::where('slug', $slug)->first();
		return view ('pages.teacher.detail', compact('teacher'));
	}




}
