@extends ('app')
@section('title', 'Home Page')
@section('content')
	<h1>home page</h1>
	<!-- all the user -->
	@if(count($users) <= 0)
		no user!
	@else
		<h2 style="text-decoration: underline;">actual kgb members!</h2>
		@foreach($users as $us)
			<strong>{{ $us->username }}</strong>
			<em><a href="{{ route('diary', $us->username) }}">his diary</a></em><br>
		@endforeach
	@endif
	<!--all the notes paginated-->
	@if(count($notes) <= 0)
		no notes yet, be the first one!
	@else
		<h2 style="text-decoration: underline;">recent notes!</h2>
		@foreach($notes as $nt)
			<h3>{{ $nt->title }}</h3>
			<p>{{ $nt->body }}</p>
			<p>{{ $nt->created_at }}</p><br>
		@endforeach
	@endif
@stop