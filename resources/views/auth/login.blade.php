@extends('app')
@section('title', 'login page')
@section('content')
	@if($errors->any())
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	@endif
	<form action="authenticate" method="get">
		@csrf
		<input type="text" name="username">
		<input type="password" name="password">
		<button type="submit">Login</button>
	</form>
@stop
