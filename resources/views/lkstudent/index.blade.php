@extends('layouts.student')
@section('title', 'Студент')


@section('content')
 

   	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Студент</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item">
						<a href="{{ route('dashstudent.home') }}">
							<i class='bx bx-home-alt text-info'></i>
						</a>
					</li>
					{{-- <li class="breadcrumb-item active" aria-current="page">Настройки</li> --}}
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->









<div class="card radius-15">
	<div class="card-body">
		<div class="card-title">
			<h4 class="mb-0">Мои консультации</h4>
		</div>
		<hr/>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Преподаватель</th>
						<th scope="col">Тема</th>
						<th scope="col">Дата | Время</th>
						<th scope="col">Статус консультации</th>
					</tr>
				</thead>

				<tbody>

					<tr>
						<th scope="row">1</th>
						<td>Виолета Владиленовна   |   Пение</td>
						<td>Пе́ние — вокальное искусство.</td>
						<td>22 июля 12:00</td>
						<td class="text-info">Открыта</td>
					</tr>

					<tr>
						<th scope="row">2</th>
						<td>Виталий Александрович   |   География</td>
						<td>Сплав по реке Обь</td>
						<td>7 июля 17:00</td>
						<td class="text-danger">Закрыто</td>
					</tr>

					<tr>
						<th scope="row">3</th>
						<td>Светлана Михайловна   |   Физика</td>
						<td>Кто изобрел радио</td>
						<td>5 сентября 15:00</td>
						<td class="text-success">Одобрено</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>






@endsection