@extends('layouts.app')

@section('navbar')
<li class='nav-item'>
  <a class='nav-link' href="{{ url('home') }}">Home</a>
</li>
<li class='nav-item'>
  <a class='nav-link' href="{{ url('logout') }}">Logout</a>
</li>
@endsection

@section('content')
<div class='container mt-4'>
  <div class='col-md-8 offset-md-2'>
    <div class='d-flex'>
      <h1 class='mr-auto p-2'>{{ $campaign->name }}</h1>
      <button id='addPostButton' class='btn btn-success p-2 mt-3' style="height:75%">+ New Post</a>
    </div>

    <!-- hidden post field -->
    <div id='addPostField' class='col-md-8 offset-md-2' style='display: none'>
        <div class='card mb-3'>
          <div class='card-header'>New Post</div>
          <div class='card-body'>
            <form action='/add-post' method='POST'>
              {{ csrf_field() }}
              <div class='form-group'>
                <label for='title'>Title</label>
                <input class='form-control' type='text' name='title'>
              </div>

              <div class='form-group'>
                <label for='content'>Content</label>
                <textarea class='form-control' name='content'></textarea>
              </div>

              <div class="custom-file form-group mb-3">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>

              <div class='invisible'>
                <input name='campaign_id' value='{{ $campaign->id }}'>
              </div>

              <button id='submitPostButton' class='btn btn-primary' type='submit'>Submit</button>
              <button id='cancelPostButton' class='btn btn-secondary' type='button'>Cancel</button>

            </form>
          </div>
      </div>
    </div>


    @php
      $conn = new mysqli("localhost", "root", "maxanderson1", "homestead");
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      foreach ($posts as $p) {
        echo "<div class='card mb-3'>";
        echo "<div class='card-body'>";
        echo "<div class='d-flex'>";
        echo "<h3 class='card-title mb-0 mr-auto'>" . $p->title . "</h3>";
        if ($p->user_id == $user->id) {
          echo "<form action='/delete-post' method='post'>";
          echo csrf_field();
          echo "<input class='invisible' name='id' value='$p->id'>";
          echo "<input class='invisible' name='campaign_id' value='$p->campaign_id'>";
          echo "<button class='btn btn-danger p-2'>Delete</button>";
          echo "</form>";
        }
        echo "</div>";
        echo "<p class='card-text text-secondary'>" . ucwords($p->user->name);
        if ($p->user->id == $p->campaign->dm_id) {
          echo " - Dungeon Master";
        } else {
          $sql = "select characters.name
          from users, characters, campaign_character, campaigns
          where users.id=characters.user_id
          and characters.id=campaign_character.character_id
          and campaign_character.campaign_id=campaigns.id
          and users.id=" . $p->user->id .
          " and campaigns.id=" . $p->campaign->id;

          $result = $conn->query($sql);
          if (!$result) {
            echo "Error";
          }

          if ($result->num_rows > 0) {
            echo " - " . $result->fetch_assoc()["name"];
          } else {
            echo " - error";
          }
        }
        echo "<p class='card-text'>" . $p->content . "</p></div></div>";
      }
    @endphp
  </div>
</div>
@endsection
