@extends('layouts.site')
@section('title', 'Главная')



@section('content')









<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Школа on-line образования
        <br class="hidden lg:inline-block">improve-your-skills
      </h1>
      <p class="mb-8 leading-relaxed">В системе народного образования: учебное заведение — начальная школа, средняя школа, высшая школа (вуз). В названиях учреждений «школа» — обычно среднее или среднее специальное учебное заведение, окончание которого подтверждается повышением образовательного уровня. </p>
      
			<div class="flex justify-center">
        <a href="{{ route('contact.home') }}" class="inline-flex text-white bg-indigo-500 border-0 py-2.5 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Контакты</a>
        <a href="{{ route('about.home') }}" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2.5 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">О нас</a>
      </div>

    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="https://images.unsplash.com/photo-1606636660488-16a8646f012c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
    </div>
  </div>
</section>





<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-4 mx-auto">
    <div class="flex flex-col text-center w-full mb-1">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Преподаватели</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Записаться на консультацию легко. Выберите нужного вам преподавателя и выберите время</p>
    </div>
  </div>
</section>





<section class="text-gray-600 body-font">
  <div class="container px-5 py-4 mx-auto">


		
    <div class="flex flex-wrap -m-4">


			@forelse($teachers as $teacher)
			<div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-blue-600 mb-1">
						{{ $teacher->tema ?? '' }}
					</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">
						{{ $teacher->name ?? '' }}
					</h1>
          <p class="leading-relaxed mb-3">
						{{ $teacher->phone ?? '' }} &nbsp; | &nbsp; {{ $teacher->email ?? '' }} <br>
					</p>

					<div class="mb-4 mt-7 text-xl border-b border-t border-indigo-600 pb-5 pt-5">Доступно консультаций  <span class="bg-indigo-500 py-1.5 px-2.5 text-white rounded">
						{{ count($teacher->shedulers) ?? '' }}
					</span></div>
          
					<a href="{{ route('teachers.detail', $teacher->slug) }}" class="text-indigo-500 hover:text-gray-500 inline-flex items-center">
						Перейти
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
			@empty
				<p>нет данных </p>
			@endforelse




    </div>
  </div>
</section>




<hr>
<br>
<br>
<br>
<br>
<br>
@if(false)
<section class="text-gray-600 body-font">
  <div class="container px-5 py-4 mx-auto">
    <div class="flex flex-wrap -m-4">
      
			@forelse($teachers as $teacher)
			<div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-blue-600 mb-1">{{ $teacher->tema ?? 'нет данных' }}</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $teacher->name ?? 'нет данных' }}</h1>
          <p class="leading-relaxed mb-3">{{ $teacher->phone ?? '' }} &nbsp; | &nbsp; {{ $teacher->email ?? '' }}</p>
          
					<a href="{{ route('teachers.detail', $teacher->slug) }}" class="text-indigo-500 hover:text-gray-500 inline-flex items-center">Перейти
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

			@empty
				<p>ничего нет</p>
			@endforelse


    </div>
  </div>
</section>
@endif



@endsection