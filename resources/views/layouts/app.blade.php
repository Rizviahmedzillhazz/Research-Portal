<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
        
	


    @yield('content')
    
</div>

@yield('footer')
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/jquery-slim.min.js') }}"></script>

  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>