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
    <div class='col-sm-8 offset-sm-2'>
      <div class='card'>
  <!-- your characters -->
        <h2 class='card-header'>Dashboard</h2>
        <div class='card-body'>
          <div class='d-flex'>
            <div class='mr-auto p-2'>
              <h4>Characters</h4>
              <a href='/add-character' class='btn btn-success mb-3'>+ New Character</a>
              <ul class='list-group'>
                @php
                if (count($characters) < 1) {
                  echo "You have no characters!";
                } else {
                  foreach ($characters as $character) {
                    echo "<a href='/characters/$character->id' class='list-group-item
                      list-group-item-action list-group-item-secondary'>" .
                      $character->name . "</a>";
                  }
                }
                @endphp
              </ul>
            </div>
          </div>

        <!-- <button class='btn btn-primary' > -->
        <!-- your campaigns -->
          <div class='d-flex'>
            <div class='mr-auto p-2'>

              <h4>Campaigns</h4>
              <a href='/add-campaign' class='btn btn-success mb-3'>+ New Campaign</a>
              <ul class='list-group'>
                @php
                if (count($campaigns) < 1) {
                  echo "You have no campaigns!";
                } else {
                  foreach ($campaigns as $campaign) {
                    echo "<a href='/campaigns/$campaign->id' class='list-group-item
                      list-group-item-action list-group-item-secondary'>" .
                      $campaign->name . "</a>";
                  }
                }
                @endphp
              </ul>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection
