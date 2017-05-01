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
    <script type="text/javascript">
        function initMap() {
                var myLatlng = {lat: 55.683098, lng: 21.188754};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 16,
                  center: myLatlng,
                  scrollwheel: false,
                  zoomControl: true,
                  scaleControl: false,
                  disableDoubleClickZoom: false,
                });
                var contentString = '<div id="content">'+
                     '<div id="siteNotice">'+
                     '</div>'+
                     '<h5 id="firstHeading" class="firstHeading">UAB "VPS"</h5>'+
                     '<div id="bodyContent">'+
                     '<p>Adresas: Šilutės pl. 79, Klaipėda</p>'+
                     '<p>Tel: +370 46 383427</p>'+
                     '<p>El.p: info@vpsjet.com</p>'+
                     '</div>'+
                     '</div>';

                 var infowindow = new google.maps.InfoWindow({
                   content: contentString
                 });
                var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                });
                map.addListener('mouseover', function() {
                    infowindow.open(map, marker);

                });
                map.addListener('mouseout', function(){
                    infowindow.close();
                });
                google.maps.event.addListenerOnce(map, 'idle', function() {
                    google.maps.event.trigger(map, 'resize');
                });
             }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFltUChUDunwQvIdsH7q8DjoSOfVcRheA&callback=initMap">
    </script>
</body>
</html>