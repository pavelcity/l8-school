<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

	<meta name="robots" content="noindex,nofollow" />
	<link rel="icon" href="{{ asset('img/fav.svg') }}" type="image/x-icon">

	<title>@yield('title')</title>


	<link rel="stylesheet" href="{{ asset('css/app.css?v=2') }}">
	
</head>
<body>


@include('pages.includes.topnav')
	@yield('content')	
@include('pages.includes.footer')	

	
</body>
</html>