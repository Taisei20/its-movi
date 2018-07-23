@extends('layouts.app')

@section('content')
<script src="{{ asset('assets/javascripts/sceneMap.js') }}" ></script>
<style>
.submit{
  margin:15px 0;
}

</style>

    {!! Form::open( array('url' => "users/products/scenes/$scene->id",
                         'method' => 'put',
                         'files' => 'true') ) !!}

    <div class="row">
      <div class="col-xs-5 col-md-5">
        <h3>シーンNo<span style="color: red; font-size: 15px; padding-left: 5px;">※入力必須</span></h3>
        {{ Form::textarea('scene_number', "$scene->scene_number" ,['style' => 'width: 100%; height:40px;']) }}

          @if (count($errors)>0)
            <div class ="error_message">
            ※シーンNoは入力必須です
            </div>
          @endif
      </div>

      <div class="col-xs-5 col-md-5 col-md-offset-1">
        <h3>撮影場所</h3>
        {{ Form::textarea('place_name', "$scene->place_name", ['style' => 'width: 100%; height:50px;']) }}
      </div>

    </div>

    <div class="row">
      <div class="col-xs-5 col-md-5">
        <h3>住所</h3>
        {{ Form::textarea('adress',"$scene->adress" ,['style' => 'width: 100%; height:50px;']) }}
      </div>
      <div class="col-xs-5 col-md-5 col-md-offset-1">
        <h3>メモ</h3>
        {{ Form::textarea('memo' ,"$scene->memo" ,['style' => 'width: 100%; height:50px;'] )}}
      </div>
    </div>

    <div class="row">
      <div class="col-xs-5 col-md-5">
        <h3>画像</h3>
        {{ Form::file('image') }}
      </div>
    </div>

    {{ Form::hidden('lat', "$scene->lat", ['id' => 'poslat']) }}
    {{ Form::hidden('lng', "$scene->lng", ['id' => 'poslng']) }}

    <div class="submit">
      {{ Form::submit('作成する',  ['class' => 'btn btn-default'] ) }}
    </div>
    {!! Form::close() !!}

<!-- 以下マップ表示機能 -->
  <div class="row">
    <h1>Map</h1>
    <input type="button" value="元の位置に戻す" onclick="resetMarker(locations)">
  </div>

  <div id="map" style="height: 600px; width: 100%;margin-bottom: 80px;">  </div>
  <div onload="fsetPosition()">  </div>
<?php
  $varLocations = json_encode($scene);
?>

<!-- 位置情報をJSON変換 -->
<script>
  locations = JSON.parse('<?php echo $varLocations; ?>');
</script>

<!-- google maspの読み込み -->
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KYE') }}&callback=initMap">
  </script>
  <script src="{{ asset('assets/javascripts/jquery-3.3.1.js') }}"></script>

@endsection