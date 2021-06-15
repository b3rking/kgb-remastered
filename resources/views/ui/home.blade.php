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
			<strong>{{ $us->username }}</strong>
			<em><a href="{{ route('diary', $us->id) }}">his diary</a></em><br>
		@endforeach
	@endif
	<!--all the notes paginated-->
	@if(is_null($notes))
		no notes, be the first one!
	@else
		<h2 style="text-decoration: underline;">recent notes!</h2>
		@foreach($notes as $nt)
			<h3>{{ $nt->title }}</h3>
			<p>{{ $nt->body }}</p>
		@endforeach
	@endif
@stop