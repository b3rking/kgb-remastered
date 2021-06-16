@extends('app')
@section('content')
	@foreach($owner as $ow)
		<h1>welcome on {{ $ow->username }} diary</h1>
		@section('title', $ow->username.' Diary')
	@endforeach
	@if (count($notes) <= 0)
		no notes!
	@else
		@foreach($notes as $nt)
			<h1>{{ $nt->title }}</h1>
			<p>{{ $nt->body }}</p><br>
		@endforeach
	@endif
@stop