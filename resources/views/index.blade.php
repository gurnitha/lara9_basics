<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>
</head>
<body>
	<h1>This is Home Page</h1>
	<a href="{{ route ('home') }}" style="color:red; background: black;">Home</a>
	<a href="{{ route ('about') }}">About</a>
	<a href="{{ route ('contact') }}">Contact</a>
	<br><br>
	
	<img src="{{url('/images/1_routes_contrller.jpg')}}" alt="Image"/>
</body>
</html>