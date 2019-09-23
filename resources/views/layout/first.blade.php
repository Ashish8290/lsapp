<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	@extends('inc.navbar')
	@yield('content')
</body>
</html>