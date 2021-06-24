<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class HomePageController extends Controller
{
    
	#index
	public function index () {
		$teachers = Teacher::latest()->get();
		return view ('pages.index', compact('teachers'));
	}









}
