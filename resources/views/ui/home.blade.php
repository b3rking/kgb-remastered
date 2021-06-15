@extends ('app')
@section('title', 'Home Page')
@section('content')
	<h1>home page</h1>
	<!-- all the user -->
	@if(is_null($users))
		no user!
	@else
		<h2 style="text-decoration: underline;">actual kgb members!</h2>
		@foreach($users as $us)
			{{ $us->username }}
		@endforeach
	@endif
	<!--all the notes paginated-->
@stop