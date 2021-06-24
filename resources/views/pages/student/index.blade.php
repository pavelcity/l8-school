@extends('layouts.site')
@section('title', 'Студенты')

 

@section('content')



<div class="container mx-auto mt-6 px-5">
	<h1 class="text-4xl font-semibold text-indigo-500 mb-10">Студенты</h1>



	<hr>


	<table class="table-auto w-full">
		<thead>
			<tr class="text-left">
				<th>Имя</th>
				<th>Почта</th>
				<th>Телефон</th>
			</tr>
		</thead>
		<tbody>

			@forelse($students as $student)
			<tr class="border-b border-indigo-500">
				<td>{{ $student->name }}</td>
				<td>{{ $student->email }}</td>
				<td>{{ $student->phone }}</td>
			</tr>
			@empty
			<p>нет данных</p>
		@endforelse


		</tbody>
	</table>


	

</div>

@endsection