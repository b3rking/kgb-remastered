@extends('app')
@section('title', 'personal page')
@section('content')
	<section class="pega1">

		<div class="user__data">
			<p>fullname: {{ $user->fullname }}</p>
			<p>username: {{ $user->username }}</p>
			<p>email: {{ $user->email }}</p>
			<p>bio: {{ $user->bio }}</p>
			<p>status: {{ $user->status }}</p>
			<p>pic_path</p><img src="{{ asset($user->pic_path) }}">
		</div>

        <h3>{{ $user->username }}, update your profile...</h3>

      <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
      	@csrf
      	{{ method_field('patch') }}
        <div class="input-box">
          <label for="username">username</label>
          <input type="text" name="username" value="{{ $user->username }}">
        </div>

        <div class="input-box">
          <label for="fullname">fullname</label>
          <input type="text" name="fullname" value="{{ $user->fullname }}">
        </div>

        <div class="input-box">
          <label for="email">email</label>
          <input class="inputBox" type="email" name="email" value="{{ $user->email }}">
        </div>

        <div class="input-box">
          <label for="status">status</label>
          <input class="inputBox" type="text" name="status" value="{{ $user->status }}">
        </div>

        <div class="input-box">
          <label for="pic_path">profile pic</label>
          <input class="inputBox" type="file" name="pic_path">
        </div>
        <div class="input-box">
          <label for="bio">bio</label>
          <textarea id="update" name="bio" cols="30" rows="10">{{ $user->bio }}</textarea>
        </div>

        <button type="submit">update user</button>
      </form>
  <h3>Your notes!</h3>
  @if(count($notes) <= 0)
      you haven't posted any note yet, try posting one!
  @else
      @foreach($notes as $nt)
          <h4>{{ $nt->title }}</h4>
          <p>{{ $nt->body }}</p>
          <a href="">edit</a>
          <a href="{{ route('user.destroy', $user->id) }}">delete</a>
          <form action="{{ route('note.update', $user->id) }}" method="post">
            <h4>editing note...</h4>
            @csrf
            {{ method_field('patch') }}
            <input type="text" name="id" hidden="" value="{{ $user->id }}">
            <div class="input-box">
              <label for="title">title</label>
              <input type="text" name="title" id="title" value="{{ $nt->title }}">
            </div>
            <div>
              <textarea name="body" id="amazing_text" cols="30" rows="10">{{ $nt->body }}</textarea>
            </div>
            <button type="submit" class="btn">edit your note!</button>
          </form>
      @endforeach
  @endif
  <div class="diary_interface">
    <h1 class="title_di">Share your journee bro</h1>
          <form action="{{ route('note.store') }}" method="POST">
            @csrf
            <input type="text" name="id" hidden="" value="{{ $user->id }}">
            <div class="input-box">
              <label for="title">title</label>
              <input type="text" name="title" id="title">
            </div>
            <div>
              <textarea name="body" id="amazing_text" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn">share my journee...</button>
          </form>
</section>
@stop