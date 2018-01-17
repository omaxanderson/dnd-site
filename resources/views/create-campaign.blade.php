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
<div class='container mt-2'>
  <div class='col-sm-8 offset-sm-2'>
    <div class='card'>
      <div class='card-header'>New Campaign</div>

      <div class='card-body'>

        <form action='add-campaign' method='post'>

          <div class='form-group'>
            <label for='name'>Campaign Title</label>
            <input type='text' class='form-control' name='name' placeholder='Title'>
          </div>

          <div class='form-group'>
            <!-- search for users to add to campaign -->
          </div>

          <button class='btn btn-primary' type='submit'>Save</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection
