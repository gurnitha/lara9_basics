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
	<hr>
	<h3>Protecting About page using middleware</h3>
	<br>
	<img src="{{url('/images/4_protecting_about_page_using_middleware.jpg')}}" alt="Image"/>
	<h3>But you can access about page if you are >20</h3>
	<br>
	<img src="{{url('/images/4.1_protecting_about_page_using_middleware.jpg')}}" alt="Image"/>


</body>
</html>