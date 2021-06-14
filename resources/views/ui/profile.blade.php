@extends('app')
@section('title', 'personal page')
@section('content')
	<section class="pega1">

  <div class="modal_container">
    <div class="modal_body">
      <div class="modal_header">
        <h3>Update your profile</h3>
        <span class='modal_x'><i class="far fa-window-close"></i></span>
      </div>
      <form action="src/app.php?action=update" method="POST" enctype="multipart/form-data">
        <div class="input-box">
          <label for="username">username</label>
          <input class="inputBox" class="inp" type="text" name="username">
        </div>

        <div class="input-box">
          <label for="fullname">fullname</label>
          <input class="inputBox" type="text" name="fullname">
        </div>

        <div class="input-box">
          <label for="email">email</label>
          <input class="inputBox" type="email" name="email">
        </div>

        <div class="input-box">
          <label for="status">status</label>
          <input class="inputBox" type="text" name="status">
        </div>

        <div class="input-box">
          <label for="fullname">profile pic</label>
          <input class="inputBox" type="file" name="profile_pic">
        </div>
        <div class="input-box">
          <label for="bio">bio</label>
          <textarea id="update" name="bio" cols="30" rows="10">here goes your bio!</textarea>
        </div>

        <button type="submit" class="btn">update user</button>
      </form>
    </div>
  </div>

  <div class="diary_interface">
    <h1 class="title_di">Share your journee bro (>_<)</h1>
          <form action="src/app.php?action=add_note" method="POST">
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