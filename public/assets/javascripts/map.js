
var markers = Array();
var infoWindow = Array();
var currentInfoWindow = null;
var map;

// mapsの生成
function initMap() {
  var centerLat = 35.6284713;
  var centerLon = 139.736571;
   map = new google.maps.Map(document.getElementById('map'),
    {
      zoom: 15,
      center: new google.maps.LatLng(centerLat, centerLon),
    });

// makerの生成
    for (var i = 0; i < locations.length; i++)
      {
        var markLat = locations[i]['lat'];
        var markLng = locations[i]['lng'];

        if(locations[i]['image']){
          var image = locations[i]['image'];
          var imageDr = `<img style="width: 150px;, hight: 150px;, " src="/assets/images/${image}">`;
      }else{
          var imageDr = `<img style="width: 150px;, hight: 150px;, " src="/assets/images/171×180.svg">`;

      }

console.log(imageDr);

        markers[i] = new google.maps.Marker(
        {
          position: new google.maps.LatLng(markLat, markLng),
          map: map,
        });

// windowの生成
        infoWindow[i] = new google.maps.InfoWindow(
          {
            content: '<h4>' + locations[i]['place_name'] + '</h4>'
                     + imageDr,
          });
        markerEvent(i);
      }

console.log(locations[0]);

// マーカーが収まる縮尺の判定
  var minX = locations[0]['lng'];
  var minY = locations[0]['lat'];
  var maxX = locations[0]['lng'];
  var maxY = locations[0]['lat'];

  for (var i = 0; i < locations.length; i++) {
    var lg = locations[i]['lng'];
    var lt = locations[i]['lat'];

    if(lg <= minX){minX = lg;}
    if(lg > maxX){maxX = lg;}
    if(lt <= minY){minY = lt;}
    if(lt > maxY){maxY = lt;}
  }

// マーカーが収まる縮尺の設定
  var sw = new google.maps.LatLng(maxY,minX);
  var ne = new google.maps.LatLng(minY,maxX);

  var bounds = new google.maps.LatLngBounds(sw,ne);
  map.fitBounds(bounds);

}

// マーカーのクリックアクションの設定
function markerEvent(i){
  markers[i].addListener('click',function(){
    if (currentInfoWindow){
      currentInfoWindow.close();
    }    var pos = markers[i].getPosition();
    var poslat = pos.lat();
    var poslng = pos.lng();

    map.panTo(new google.maps.LatLng(poslat,poslng));

    infoWindow[i].open(map,markers[i]);
    currentInfoWindow = infoWindow[i];


  });
}



