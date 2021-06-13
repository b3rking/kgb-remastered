@extends('app')
@section('title', 'sign up page')
@section('content')

<form action="{{ route('user.store') }}" method="post">
	@csrf
	<label> fullname <input type="text" name="fullname"></label>
	<label>username <input type="text" name="username"></label>
	<label>email <input type="text" name="email"></label>
	<label>password <input type="password" name="password"></label>
	<input type="submit" value="Create account">	
</form>
@stop