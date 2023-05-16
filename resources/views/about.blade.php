<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>
</head>
<body>
	<h1>This is About New Page</h1>
	<h3>Grouping the route</h3>

	<a href="{{ route ('home') }}">Home</a>
	<a href="{{ route ('about') }}" style="color:red; background: black;">About</a>
	<a href="{{ route ('contact') }}">Contact</a>
	<br><br>
	
	<img src="{{url('/images/2_grouping_the_route.jpg')}}" alt="Image"/>
</body>
</html>