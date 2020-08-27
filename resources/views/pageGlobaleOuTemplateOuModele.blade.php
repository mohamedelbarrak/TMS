<!DOCTYPE html>
<html>
<head>
    <title>test1</title><!-- bootstrap-grid.css -->
   <link rel="stylesheet1" href="{{ asset('scss/bootstrap-grid.css') }}"> <!-- bien -->
   <link rel="stylesheet2" href="{{ asset('scss/bootstrap-grid.min.css.map') }}"> <!-- bien -->
   <link rel="stylesheet3" href="{{ asset('scss/bootstrap-reboot.css.map') }}"> <!-- bien -->
   <link rel="stylesheet4" href="{{ asset('scss/bootstrap-reboot.min.css.map') }}"> <!-- bien -->
   <link rel="stylesheet5" href="{{ asset('scss/bootstrap.css.map') }}"><!-- bien -->
   <link rel="stylesheet6" href="{{ asset('scss/bootstrap.min.css.map') }}"><!--  bien -->
      <!--<script src="{{ asset('js/1.js.map') }}"></script> -->
      <!--<script src="{{ asset('js/2.js.map') }}"></script> -->
      <!--<script src="{{ asset('js/3.js.map') }}"></script> -->
      <!--<script src="{{ asset('js/4.js.map') }}" ></script> -->
</head>
<body>
      header1
      <hr />
         @yield("content")
      <hr />
      footer1
</body>
</html>