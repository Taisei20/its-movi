@extends('layouts.app')

@section('content')
<script src="{{ asset('assets/javascripts/map.js') }}" ></script>

  <div class="row">
    <h1>{{ $dtlProduct->title }}</h1>
  </div>

<!-- 作品詳細情報の表示 -->
  <div class="row">
    <div class="col-xs-6 col-md-6">
      @if($dtlProduct->image)
        <img class="thumbnail " src="{{ asset( 'assets/images')}}/{{$dtlProduct->image}}" alt="..." style="max-width: 100%">
      @else
        <img class="thumbnail " src="{{ asset( 'assets/images')}}/171×180.svg" alt="..." style="max-width: 100%">
      @endif
    </div>

    <div class="col-xs-6 col-md-6">
      <ul class="list-group">
        <li class="list-group-item">作品分数</li>

        <li class="list-group-item" style="word-wrap: break-word;">
          @if($dtlProduct->running_time)
            {{ $dtlProduct->running_time }}
          @else
            No data
          @endif
        </li>
      </ul>

      <ul class="list-group">
        <li class="list-group-item">作品URL</li>
          <li class="list-group-item" style="word-wrap: break-word;">
           @if($dtlProduct->url)
            <a href="" title="">
              {{ $dtlProduct->url }}
            </a>
          @else
            No URL
          @endif
        </li>
      </ul>
    </div>
  </div>

  <div class="row" style="margin: 5px 0;">
    <ul class="list-group" >
      <li class="list-group-item">あらすじ</li>
      <li class="list-group-item" style="word-wrap: break-word;">
        @if($dtlProduct->story)
        {{ $dtlProduct->story }}
        @else
          No Summary
        @endif
      </li>
    </ul>
  </div>

  <div class="row" style="margin: 5px 0;">
    <ul class="list-group" >
      <li class="list-group-item">コメント</li>
      <li class="list-group-item" style="word-wrap: break-word;">
        @if($dtlProduct->comment)
          {{ $dtlProduct->comment }}
        @else
          No comment
        @endif
      </li>
    </ul>
  </div>

<!-- とりあえず作品情報編集のリンク設置 -->
  <a class="btn btn-default" href="/users/products/create" >作品情報編集</a>

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