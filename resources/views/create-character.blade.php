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
        <div class='card-header'>Character Creation</div>
        <div class='card-body'>
          <!-- form? -->

          <form action='add-character' method='POST'>
            {{ csrf_field() }}

            <div class='row'>
              <div class='form-group col-sm-10'>
                <label for='name'>Name</label>
                <input type='text' class='form-control' name='name'
                  placeholder='Character Name'>
              </div>
              <div class='form-group col-sm-2'>
                <label for='level'>Level</label>
                <input type='text' class='form-control' name='level'
                  placeholder='Level'>
              </div>
            </div>

              <div class='row'>
                <div class='form-group col'>
                  <label for='race'>Race</label>
                  <input type='text' class='form-control' name='race'
                    placeholder='Race'>
                </div>


                <div class='form-group col'>
                  <label for='class'>Class</label>
                  <input type='text' class='form-control' name='class'
                    placeholder='Class'>
                </div>
              </div>

              <div class='row'>
                <div class='form-group col'>
                  <label for='background'>Alignment</label>
                  <input type='text' class='form-control' name='alignment'
                    placeholder='Alignment'>
                </div>

                <div class='form-group col'>
                  <label for='alignment'>Background</label>
                  <input type='text' class='form-control' name='background'
                    placeholder='Background'>
                </div>
              </div>

              <div class='row'>
                <div class='form-group col'>
                  <label for='str'>Strength</label>
                  <input type='text' class='form-control' name='str' placeholder='STR'>
                </div>

                <div class='form-group col'>
                  <label for='str'>Dexterity</label>
                  <input type='text' class='form-control' name='dex' placeholder='DEX'>
                </div>

                <div class='form-group col'>
                  <label for='str'>Constitution</label>
                  <input type='text' class='form-control' name='con' placeholder='CON'>
                </div>

                <div class='form-group col'>
                  <label for='str'>Intelligence</label>
                  <input type='text' class='form-control' name='int' placeholder='INT'>
                </div>

                <div class='form-group col'>
                  <label for='str'>Wisdom</label>
                  <input type='text' class='form-control' name='wis' placeholder='WIS'>
                </div>

                <div class='form-group col'>
                  <label for='str'>Charisma</label>
                  <input type='text' class='form-control' name='cha' placeholder='CHA'>
                </div>

              </div>

              <div class='row'>
                <div class='form-group col'>
                  <label for='hp'>Hit Points</label>
                  <input type='text' class='form-control' name='hp' placeholder='HP'>
                </div>

                <div class='form-group col'>
                  <label for='ac'>Armor Class</label>
                  <input type='text' class='form-control' name='ac' placeholder='AC'>
                </div>

                <div class='form-group col'>
                  <label for='speed'>Speed</label>
                  <input type='text' class='form-control' name='speed' placeholder='Speed'>
                </div>

              </div>

            <button type="submit" class="btn btn-primary">Save Progress</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
