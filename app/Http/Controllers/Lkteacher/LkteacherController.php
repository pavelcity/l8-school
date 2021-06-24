<?php

namespace App\Http\Controllers\Lkteacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LkteacherController extends Controller
{
    
	#index
	public function index () {
		return view ('lkteacher/index');
	}
}
