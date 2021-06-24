<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Sheduler;

class HomePageController extends Controller
{
    
	#index
	public function index () {
		// $teachers = Teacher::latest()->get();
		$teacher = Teacher::firstOrFail();
		$shedulers = $teacher->shedulers()->get();

		$teachers = Teacher::latest()->get();
		return view ('pages.index', compact('shedulers', 'teachers'));
	}












}
