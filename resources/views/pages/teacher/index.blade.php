

@extends('layouts.site')
@section('title', 'учителя')

 

@section('content')



<div class="container mx-auto mt-6">
	<h1 class="text-4xl font-semibold text-indigo-500 mb-10">Учителя</h1>



	<hr>


	<table class="table-auto w-full">
		<thead>
			<tr class="text-left">
				<th>Имя</th>
				<th>Предмет</th>
				<th>Почта</th>
				<th>Телефон</th>
			</tr>
		</thead>
		<tbody>

			@forelse($teachers as $teacher)
			<tr class="border-b border-indigo-500">
				<td><a href="{{ route('teachers.detail', $teacher->slug) }}" class="text-indigo-500 hover:text-gray-800 transition">{{ $teacher->name }}</a></td>
				<td>{{ $teacher->tema }}</td>
				<td>{{ $teacher->email }}</td>
				<td>{{ $teacher->phone }}</td>
			</tr>
			@empty
			<p>нет данных</p>
		@endforelse


		</tbody>
	</table>


	

</div>

@endsection