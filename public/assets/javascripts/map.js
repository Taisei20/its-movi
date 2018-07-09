
// mapsの生成
      var markers = Array();

      function initMap() {
        var centerLat = 35.6284713;
        var centerLon = 139.736571;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: new google.maps.LatLng(centerLat, centerLon),
        });


  // function setMarkers(response){

  //       if(markers.length > 0){
  //         for(i = 0; i < markers.length; i++){
  //           markers[i].setMap(null);
  //         }
  //         markers = [];
  //       }

  //       for (var i = 0; i < response.length; i++) {
  //         var markLat = response[i]['lat'];
  //         var lon = response[i]['lon'];

  //         markers[i] = new google.maps.Marker({
  //           position: {lat : markLat, lng : lon },
  //           map: map,
  //           icon : "{{ asset('assets/img/m1.png') }}",
  //         });
  //       }
  //     }

// google.maps.event.addListener(map, 'idle', function() {
//       var bounds = map.getBounds();
//       var mapLocation = {
//       map_ne_lat : bounds.getNorthEast().lat(),
//       map_sw_lat : bounds.getSouthWest().lat(),
//       map_ne_lng : bounds.getNorthEast().lng(),
//       map_sw_lng : bounds.getSouthWest().lng(),
//     };
//       console.log(mapLocation);

//   $.ajax({
//     url: '/map/2',
//     type: 'GET',
//     dataType:'JSON',
//     timeout: 1000,
//     data: mapLocation,
//     error: console.log("×"),
//     }).done( function(responseData){
//       setMarkers(responseData) });
// });

}