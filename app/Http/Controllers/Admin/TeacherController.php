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


	#create
	public function create () {
		return view ('admin.teacher.create');
	} 







	#store
	public function store (Request $request) {
		$this->validate($request, [
			'name' => 'required',
			'tema' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
			'password' => 'required',
		], [
			'name.required' => 'обязательное поле',
			'tema.required' => 'обязательное поле',
			'email.email' => 'введите email',
			'email.required' => 'обязательное поле',
			'phone.required' => 'обязательное поле',
			'password.required' => 'обязательное поле',
		]);

		$teacher = new Teacher;

		$teacher->name = $request->name;
		$teacher->tema = $request->tema;
		$teacher->email = $request->email;
		$teacher->phone = $request->phone;
		$teacher->password = bcrypt($request->password);
		$teacher->sheduler_id = 1;
		$teacher->save();

		return redirect()->route('dashboard.teacher.home');
	}



		#edit
		public function edit ($id) {
			$teacher = Teacher::find($id);
			return view ('admin.teacher.edit', compact('teacher'));
		} 



	
		

	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'name' => 'required',
		], [
			'name.required' => 'обязательное поле',
		]);

		$teacher = Teacher::find($id);

		$teacher->update([
			'name' => $request->name,
			'tema' => $request->tema,
			'email' => $request->email,
			'phone' => $request->phone,
		]);

		return redirect()->route('dashboard.teacher.home');
	}
	





	#delete
	public function delete ($id) {
		$teacher = Teacher::find($id);
		$teacher->delete();

		return redirect()->route('dashboard.teacher.home');
	}


}
