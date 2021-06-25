@extends('layouts.teacher')
@section('title', 'Учителя Расписание')

 
@section('content')


	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Расписание</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item">
						<a href="{{ route('dashteacher.home') }}">
							<i class='bx bx-home-alt text-info'></i>
						</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Расписание</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->






 

<div class="card radius-5">
	<div class="card-body">
	
		<div class="card-title">
			
			
			<a href="{{ route('dashteacher.teachersheduler.create') }}" class="btn btn-info m-1 px-5 py-2">
				<i class="bx bx-plus"></i>
			</a>

			
		</div>
		<hr/>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Название</th>
						<th scope="col">Преподаватель</th>
						<th scope="col">Дата</th>
						<th scope="col">Время</th>
						<th scope="col">Статус консультации</th>
						<th style="width: 200px;">btns</th>
					</tr>
				</thead>
			


				@php
					$i = 1;
				@endphp

				<tbody>

					@if(true)
					@forelse($shedulers as $item)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $item->title ?? 'нет данных' }}</td>
						<td>{{ $item->teacher->name ?? 'нет данных' }} &nbsp; | &nbsp; {{ $item->teacher->tema ?? '' }}</td>
						<td>{{ $item->day ?? 'нет данных' }}</td>
						<td>{{ $item->time ?? 'нет данных' }}</td>
 
						@if($item->status == 1)
							<td class="text-info">Открыта</td>
						@elseif ($item->status == 2) 
							<td class="text-success">Одобрено</td>
							@elseif ($item->status == 3) 
							<td class="text-danger">Закрыто</td>
						@else
						<td>не указан</td>
						@endif
 
						

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								<a href="{{ route('dashteacher.teachersheduler.edit', $item->id) }}" class="btn btn-twitter btn-sm">Редактировать</a>
								<a href="{{ route('dashteacher.teachersheduler.delete', $item->id) }}" onclick="return confirm('удалить?')" class="btn btn-danger btn-sm">Удалить</a>
							</div>
						</td>

					</tr>
					@empty
						<p>Данных нет</p>
					@endforelse
					@endif
				



				</tbody>

			</table>
		</div>
	</div>
</div>




@endsection

