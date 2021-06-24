 
@extends('layouts.admin')
@section('title', 'Учителя изменить')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Учителя</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt text-info'></i></a>
					</li>
					<li class="breadcrumb-item active " aria-current="page"><a href="{{ route('dashboard.teacher.home') }}" class="text-info">Учителя</a></li>
					<li class="breadcrumb-item active" aria-current="page">изменить</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->












	<div class="card radius-5">
		<div class="card-body">



			@if(true)
			<form action="{{ route('dashboard.teacher.update', $teacher->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
				@csrf
		
				<div class="card-title">
					<button type="submit" class="btn btn-info m-1 px-5 py-2">Сохранить</button>
					<a href="{{ route('dashboard.teacher.home') }}" class="btn btn-outline-info m-1 px-5 py-2">Назад</a>
				</div>
				<hr/>



			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">teacher</a>
				</li>
			</ul>








			<div class="tab-content p-3" id="myTabContent">

				{{-- #статья --}}
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					
					
								{{-- ### --}}
					
							<br>
							<div class="form-group">
								<label for="name">Имя преподавателя  </label>
								<input class="form-control form-control-lg" id="name" name="name" type="text" placeholder="имя" value="{{ $teacher->name }}">
								@error('name')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<br>
							<div class="form-group">
								<label for="tema">Предмет  </label>
								<input class="form-control form-control-lg" id="tema" name="tema" type="text" placeholder="предмет" value="{{ $teacher->tema }}">
								@error('tema')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<br>
							<div class="form-group">
								<label for="email">email </label>
								<input class="form-control form-control-lg" id="email" name="email" type="text" placeholder="email" value="{{ $teacher->email }}">
								@error('email')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<br>
							<div class="form-group">
								<label for="phone">Телефон </label>
								<input class="form-control form-control-lg" id="phone" name="phone" type="text" placeholder="Телефон" value="{{ $teacher->phone }}">
								@error('phone')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>








							@if(false)
							<br>
								<label for="short">Аватар</label>
								<div class="mt-0">
									<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic">
								</div>

								<br>
								@error('pic')
									<p style="color:red; font-size:12px;">{{ $message }}</p>
								@enderror
								<div class="input-group mb-1 mt-0">
									<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
									</div>
									<div class="custom-file">
										<input type="file" name="avatar" class="custom-file-input " id="avatar" aria-describedby="avatar">
										<label class="custom-file-label" for="avatar">Выберите файл</label>
									</div>
									
								</div>
								<br>
								<br>
								@endif


					
					
		
				</div>
				{{-- #статья END --}}













			</div>






			<hr>
			<button type="submit" class="btn btn-info m-1 px-5 py-2">Сохранить</button>
			<a href="{{ route('dashboard.teacher.home') }}" class="btn btn-outline-info m-1 px-5 py-2">Назад</a>

		</form>
		@endif



		</div>
	</div>





	







@push('scripts')
	<script>
		$(document).ready(function(){
			$('#avatar').change(function(e){
				let reader = new FileReader();
				reader.onload = function(e) {
					$('#showPic').attr('src', e.target.result);
				}
				reader.readAsDataURL(e.target.files['0']);
			});
		});
	</script>	


<script>
	$(document).ready(function(){
		$('#avatar2').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic2').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


<script>
	$(document).ready(function(){
		$('#avatar480').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic480').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	

<script>
	$(document).ready(function(){
		$('#avatar414').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic414').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	

<script>
	$(document).ready(function(){
		$('#avatarogimg').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPicogimg').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


@endpush







@push('scripts')
	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>


	<script>
		ClassicEditor
				.create( document.querySelector('#short') )
				.catch( error => {
						console.error( error );
				} );
	</script>

	<script>
		ClassicEditor
				.create( document.querySelector('#descr') )
				.catch( error => {
						console.error( error );
				} );
	</script>

@endpush







@endsection


