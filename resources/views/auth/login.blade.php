@extends('app')
@section('title', 'login page')
@section('content')
	@if($errors->any())
		@foreach($errors as $error)
			{{ $error }}
		@endforeach
	@endif
	<form action="authenticate" method="get">
		@csrf
		<input type="text" name="username">
		<input type="password" name="password">
		<button type="submit">Login</button>
	</form>
@stop