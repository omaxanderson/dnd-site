<!DOCTYPE html>

<html>

  <head>
    <title>DnD</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <!-- Optional theme -->
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    -->

    <!-- Latest compiled and minified JavaScript -->
    <!--
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    -->

    <script>
    $(document).ready(function(){
        $("#addPostButton").click(function(){
          $("#addPostField").slideDown("fast");
        });

        $("#cancelPostButton").click(function() {
          $("#addPostField").slideUp("fast");
        });

        $(".list-group-item").hover(function() {
          // $(this).addClass("active");
        }, function() {
          // $(this).removeClass("active");
        });
    });

    function submitPost() {
      // ajax call
      // update the DOM
      alert('hey');
    }
    </script>

  </head>

  <body id='app-layout'>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
      <a class='navbar-brand' href='/'>Home</a>
      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav ml-auto nav'>
          @yield('navbar')
        </ul>
      </div>
    </nav>

    @yield('content')
  </body>

</html>
