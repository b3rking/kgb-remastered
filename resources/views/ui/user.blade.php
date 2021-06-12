@extends('app')
@section('title', 'user page')
@section('content')
	@foreach($users as $user)
		@if (count($user) < 0)
			no records!
		@else
			{{ $user }}
		@endif
	@endforeach
@stop