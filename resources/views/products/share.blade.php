@extends('layouts.app')

@section('content')
<script src="{{ asset('assets/javascripts/map.js') }}" ></script>

  <div class="row">
    <h1>{{ $dtlProduct->title }}</h1>
  </div>

<!-- 作品詳細情報の表示 -->
  <div class="row">
    <div class="col-xs-6 col-md-6">
      <a href="#" class="thumbnail ">
        <img src="{{ asset( 'assets/images')}}/{{$dtlProduct->image}}" alt="..." style="max-width: 100%">
  <!--       <img src="{{ asset( 'assets/images/kachinko.jpg') }}" alt="..." style="max-width: 100%"> -->
      </a>
    </div>

    <div class="col-xs-6 col-md-6">
      <ul class="list-group">
        <li class="list-group-item">作品分数</li>
        <li class="list-group-item" style="word-wrap: break-word;">15</li>
      </ul>

      <ul class="list-group">
        <li class="list-group-item">作品URL</li>
        <li class="list-group-item" style="word-wrap: break-word;"><a href="" title="">Vestibulum at eros</a></li>
      </ul>
    </div>
  </div>

  <div class="row">
    <ul class="list-group" style="margin: 0 15px;">
      <li class="list-group-item">あらすじ</li>
      <li class="list-group-item" style="word-wrap: break-word;">Vestibulum at erosaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaerosaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</li>
    </ul>
  </div>

  <div class="row">
    <h1>Map</h1>
  </div>

  <div id="map" onload="initMap()" style="height: 600px; width: 100%;margin-bottom: 40px;">  </div>

<?php 
  $varLocations = json_encode($locations);
?>

<!-- 位置情報をJSON変換 -->
<script>
  var locations = JSON.parse('<?php echo $varLocations; ?>');
</script>

<!-- google maspの読み込み -->
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KYE') }}&callback=initMap">
  </script>
  <script src="{{ asset('assets/javascripts/jquery-3.3.1.js') }}"></script>

@endsection