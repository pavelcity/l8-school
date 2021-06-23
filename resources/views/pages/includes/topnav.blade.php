<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="{{ route('home.page') }}" class=" flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="34" height="34" viewBox="0 0 24 24">
				<path fill="#6366F1"  d="M12 3L1 9L5 11.18V17.18L12 21L19 17.18V11.18L21 10.09V17H23V9L12 3M18.82 9L12 12.72L5.18 9L12 5.28L18.82 9M17 16L12 18.72L7 16V12.27L12 15L17 12.27V16Z" />
		 </svg>
      <span class="ml-3 text-xl">Школа</span>
    </a>

    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a href="{{ route('home.page') }}" class="mr-5 text-gray-900 hover:text-indigo-700">Главная</a>
      <a class="mr-5 hover:text-gray-900 text-indigo-700">Second Link</a>
      <a class="mr-5 hover:text-gray-900 text-indigo-700">О нас</a>
      <a class="mr-5 hover:text-gray-900 text-indigo-700">Контакты</a>
    </nav>
		
    {{-- <a href="#" class="mr-10 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-0">Я студент
    </a>

    <a href="#" class="block bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-50 rounded text-base mt-0 ml-5">Я преподаватель
    </a> --}}

		<div>
			<a href="#" class="bg-indigo-500 px-4 py-1.5 rounded text-white inlie-block uppercase text-xs hover:bg-gray-100 transition hover:text-indigo-500">я студент</a>
			<a href="#" class="bg-indigo-500 px-4 py-1.5 rounded text-white inlie-block uppercase text-xs hover:bg-gray-100 transition hover:text-indigo-500">я преподаватель</a>
		</div>

  </div>
</header>
