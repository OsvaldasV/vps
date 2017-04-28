<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Vps metal works">
    <meta name="author" content="Osvaldas Vaivada">
    <link rel="icon" href="{{ asset('favicon.ico')}}">

    <title>@lang('site.title')</title>

    <!-- Custom styles for this template -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    @yield('header')

    @yield('zero')

    @yield('one')
    
    @yield('two')
    
    @yield('three')
    
    @yield('four')
    
    @yield('five')

    @yield('six')

    @yield('footer')

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
</body>
</html>