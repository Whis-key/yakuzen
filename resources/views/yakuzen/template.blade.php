<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="shortcut icon" type="image/png" href="{{url('/')}}/img/icon.png"/>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		@include('yakuzen.header')

		@yield('content')

		@include('yakuzen.footer')
	</div>

	<script
	  src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous">
	</script>

	@yield('script')
</body>
</html>