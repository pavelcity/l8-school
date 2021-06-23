<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
	#index
	public function index () {
		$contact = Contact::first();
		return view ('pages.contact.index', compact('contact'));
	}


	
}
