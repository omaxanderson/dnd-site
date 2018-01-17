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
  <div class='container mt-3'>
    <h3>{{ $character->name }}</h3>
    <p class='text-secondary mt-3'>{{ $character->race }}</p>
    <p class='text-secondary'>{{ $character->class }}</p>
  </div>

@endsection
