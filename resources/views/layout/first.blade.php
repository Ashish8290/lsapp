<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@yield('content')
	</div>
</body>
</html>