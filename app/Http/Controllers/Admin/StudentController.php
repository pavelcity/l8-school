<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
	#index
	public function index () {
		$students = Student::latest()->get();
		return view ('admin.student.index', compact('students'));
	}




	#create
	public function create () {
		return view ('admin.student.create');
	}

 

	#store
	public function store (Request $request) {
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
			'password' => 'required',
		], [
			'name.required' => 'обязательное поле',
			'email.email' => 'введите email',
			'email.required' => 'обязательное поле',
			'phone.required' => 'обязательное поле',
			'password.required' => 'обязательное поле',
		]);

		$student = new Student;

		$student->name = $request->name;
		$student->email = $request->email;
		$student->phone = $request->phone;
		$student->password = bcrypt($request->password);
		$student->save();

		return redirect()->route('dashboard.student.home');
	}


 

	#edit
	public function edit ($id) {
		$student = Student::find($id);
		return view ('admin.student.edit', compact('student'));
	}







	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			// 'name' => 'required',
		]);


		$student = Student::find($id);

		$student->update([
			'name' => $request->name,
			'email' => $request->email,
			'phone' => $request->phone,
		]);

		
		return redirect()->route('dashboard.student.home');
	}








	#delete
	public function delete($id) {
		$student = Student::find($id);
		$student->delete();

		return redirect()->route('dashboard.student.home');
	}






}
