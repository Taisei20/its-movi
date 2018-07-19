var markers = Array();
var infoWindow = Array();
var currentInfoWindow = null;


// mapsの生成
function initMap() {

  console.log(locations);

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
  markerPoition();
}

// マーカーの位置情報を取得
function markerPoition(){
  google.maps.event.addListener( markers, 'dragend', function(){
    var pos = markers.getPosition();
    var poslat = pos.lat();
    var poslng = pos.lng();
    document.getElementById("poslat").value = poslat;
    document.getElementById("poslng").value = poslng;
  });
}

// マーカーのクリックアクションの設定
function markerEvent(){
  markers.addListener('click',function(){
    infoWindow.open(map,markers);
    currentInfoWindow = infoWindow;
  });
}






