@extends('layouts.site')
@section('title', 'Главная')



@section('content')









<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Школа on-line образования
        <br class="hidden lg:inline-block">improve-it
      </h1>
      <p class="mb-8 leading-relaxed">В системе народного образования: учебное заведение — начальная школа, средняя школа, высшая школа (вуз). В названиях учреждений «школа» — обычно среднее или среднее специальное учебное заведение, окончание которого подтверждается повышением образовательного уровня. </p>
      
			<div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2.5 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Контакты</button>
        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2.5 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">О нас</button>
      </div>

    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="https://images.unsplash.com/photo-1606636660488-16a8646f012c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
    </div>
  </div>
</section>




@endsection