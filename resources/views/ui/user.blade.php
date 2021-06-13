@extends('app')
@section('title', 'user page')
@section('content')
	
	@if (count($users) < 0)
			no records!
	@else
		@foreach($users as $user)
			{{ $user->username }}
		@endforeach
	@endif
@stop