@extends('layouts.app')

@section('content')
<script src="{{ asset('assets/javascripts/map.js') }}" ></script>


<!-- シーン情報の表示 -->
 <div class="row">
    <h1>シーン{{ $Scene_info->scene_number }}</h1>
  </div>

  <div class="row">
    <div class="col-xs-6 col-md-6">
      @if($Scene_info->image)
        <img class="thumbnail " src="{{ asset( 'assets/images')}}/{{$Scene_info->image}}" alt="..." style="max-width: 100%">
      @else
        <img class="thumbnail " src="{{ asset( 'assets/images')}}/171×180.svg" alt="..." style="max-width: 100%">
      @endif
    </div>
  </div>

<!-- レイアウト調整役として設置 -->
  <div class="row">
    <p></p>
  </div>
<!--  -->


  <div class="row" style="margin: 5px 0;">
    <ul class="list-group" >
      <li class="list-group-item">メモ</li>
      <li class="list-group-item" style="word-wrap: break-word;">
         @if($Scene_info->memo)
          {{ $Scene_info->memo }}
        @else
          No memo
        @endif
      </li>
    </ul>
  </div>

  <div class="row" style="margin: 5px 0;">
    <ul class="list-group" >
      <li class="list-group-item">撮影場所</li>
      <li class="list-group-item" style="word-wrap: break-word;">
        @if($Scene_info->place)
          {{ $Scene_info->place }}
        @else
          No data
        @endif
      </li>
    </ul>
  </div>

  <div class="row" style="margin: 5px 0;">
    <ul class="list-group" >
      <li class="list-group-item">住所</li>
      <li class="list-group-item" style="word-wrap: break-word;">
        @if($Scene_info->adress)
          {{ $Scene_info->adress }}
        @else
          No data
        @endif
      </li>
    </ul>
  </div>


<!-- 以下マップ表示機能 -->
  <div class="row">
    <h1>Map</h1>
  </div>

  <div id="map" onload="initMap()" style="height: 600px; width: 100%;margin-bottom: 40px;">  </div>

<?php
  $varLocations = json_encode($location);
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