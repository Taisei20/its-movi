var markers = Array();
var infoWindow = Array();
var currentInfoWindow = null;
var map;


// シーン編集用mapsの生成
function initMap() {

  var centerLat = locations['lat'];
  var centerLon = locations['lng'];

  map = new google.maps.Map(document.getElementById('map'),
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

// 吹き出しの生成
  infoWindow = new google.maps.InfoWindow(
    {
      content: '<div>' + locations['place_name'] + '</div>'
    });

  markerEvent();
  markerPoition();
}


// シーン詳細用mapsの生成
function initMap2() {

  var centerLat = locations['lat'];
  var centerLon = locations['lng'];

  map = new google.maps.Map(document.getElementById('map'),
    {
      zoom: 15,
      center: new google.maps.LatLng(centerLat, centerLon),
    });

// makerの生成
  var markLat = locations['lat'];
  var markLng = locations['lng'];

  markers = new google.maps.Marker(
    {
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

// マーカーを初期位置に戻す
function resetMarker(locations){
  var position = new google.maps.LatLng(locations['lat'],locations['lng']);
  markers.setPosition(position);
  map.panTo(position);
}

// ピンの位置の住所情報を取得
function reverseGeo(){
    var pos = markers.getPosition();
    var poslat = pos.lat();
    var poslng = pos.lng();
    var latlng = new google.maps.LatLng(poslat, poslng);

    var adress = "";

    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({'location': latlng}, function(results, status) {
      if (status === google.maps.GeocoderStatus.OK) {
        if(results[0].address_components.length == 9){
          for(i = results[0].address_components.length - 3; i > 0; i--){
            if(i == 1){
          adress = adress + "-" +results[0].address_components
[i].long_name;
                       }else{
          adress = adress + results[0].address_components
[i].long_name;}
           }
      }else if(results[0].address_components.length == 8){
        for(i = results[0].address_components.length - 3; i >= 0; i--){
          if(i == 0){
          adress = adress + "-" +results[0].address_components
[i].long_name;
                       }else{
          adress = adress + results[0].address_components
[i].long_name;}
        }
      }else{
        for(i = results[0].address_components.length - 3; i >= 0; i--){
          adress = adress + results[0].address_components
[i].long_name;
        }
      }

    document.getElementById("adress").value = adress;

      }
    });

}







