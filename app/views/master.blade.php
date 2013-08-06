<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
	
	<!-- Stylesheet -->
	{{ HTML::style('css/master.css') }}

	<!-- jQuery libraries -->
	{{ HTML::script('jscripts/jquery-1.8.2.min.js') }}


</head>
<body>
	@include('matches.topmessages')
	@yield('content')
</body>
</html>
