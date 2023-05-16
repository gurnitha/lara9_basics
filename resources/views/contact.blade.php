<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
</head>
<body>
	<h1>This is Contact Page</h1>
	<h3>Linking the pages</h3>


	<a href="{{ route ('home') }}">Home</a>
	<a href="{{ route ('about') }}">About</a>
	<a href="{{ route ('contact') }}" style="color:red; background: black;">Contact</a>
	<br><br>

	<hr>
	<img src="{{url('/images/3_linking_the_pages.jpg')}}" alt="Image"/>
</body>
</html>