<!doctype>
<html>
  <head>
    <title>My Site</title>

    <link rel="stylesheet" href="">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    
  </head>
  <body>

    <div class="container">
      <div class="jumbotron">
          @yield('content')
          @yield('profile')
          @yield('one_user')
          @yield('update')
      </div>
    </div>

    <footer class="text-center">
      &copy; Copyright
    </footer>
  </body>
</html>
