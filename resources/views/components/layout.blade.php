<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Complete the quiz</title>

	{{-- FONTS --}}
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Chango&family=Syne+Mono&display=swap" rel="stylesheet">

	{{-- JS --}}

	{{-- CSS --}}
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
	
	@csrf
	{{ $slot }}

	<footer>
		<span>Daniils Aleksasins</span>
	</footer>

</body>

</html>
