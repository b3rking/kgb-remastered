@extends('app')
@section('title', 'login page')
@section('content')
	<form action="login" method="get">
		@csrf
		<input type="text" name="username">
		<input type="password" name="password">
		<button type="submit">Login</button>
	</form>
@stop