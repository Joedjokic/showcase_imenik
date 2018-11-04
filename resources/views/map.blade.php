@extends('layouts.app')
@section('content')
<h1>Mapa</h1>
    <div id="map"></div>
    <script>
      @if($data)
      const addresses = [@foreach($data as $address)"{{$address->grad}} {{$address->ulica}}",@endforeach];
      @else
      addresses = ["beograd"];
      @endif
      var geocoder;
      var map;      
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 44.397, lng: 22.644}
        });
        geocoder = new google.maps.Geocoder();
        for (const s of addresses) {  
            address = s;
                codeAddress(geocoder, map, address);
            }
      }

      function codeAddress(geocoder, map, address) {
            geocoder.geocode({'address': address}, function(results, status) {
                if (status === 'OK') {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                    });
                } else {
                   console.log('Geocode was not successful for the following reason: ' + status);
                }
            });
        
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCk4BUlJJoJtb-IbDS115Xcp9WSbWSU7ts&callback=initMap">
    </script>
@endsection
