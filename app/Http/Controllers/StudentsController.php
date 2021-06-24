<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    
	#index
	public function index () {
		$students = Student::latest()->get();
		return view ('pages.student.index', compact('students'));
	}




}
