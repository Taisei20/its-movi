var markers = Array();
var infoWindow = Array();
var currentInfoWindow = null;


// mapsの生成
function initMap() {
  var centerLat = locations['lat'];
  var centerLon = locations['lng'];
  var map = new google.maps.Map(document.getElementById('map'),
    {
      zoom: 15,
      center: new google.maps.LatLng(centerLat, centerLon),
    });

// makerの生成
        var markLat = locations['lat'];
        var markLng = locations['lng'];

        console.log(markLat);
        console.log(markLng);

        markers = new google.maps.Marker(
        {
          draggable:true,
          position: new google.maps.LatLng(markLat, markLng),
          map: map,
        });

// windowの生成
        infoWindow = new google.maps.InfoWindow(
          {
            content: '<div>' + locations['place_name'] + '</div>'
          });

        markerEvent();

console.log(locations);

}

// マーカーのクリックアクションの設定
function markerEvent(){
  markers.addListener('click',function(){
    infoWindow.open(map,markers);
    currentInfoWindow = infoWindow;
  });
}


