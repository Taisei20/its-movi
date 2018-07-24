@extends('layouts.app')

@section('content')
<script src="{{ asset('assets/javascripts/sceneMap.js') }}" ></script>
<style>
.submit{
  margin:15px 0;
}

#adress {
  width:100%;
  height: 50px;
}


</style>

    {!! Form::open( array('url' => "users/products/scenes/$scene->id",
                         'method' => 'put',
                         'files' => 'true') ) !!}









  <div class="row">
    <div class="col-xs-5 col-md-5">
        <h3>シーンNo<span style="color: red; font-size: 15px; padding-left: 5px;">※入力必須</span></h3>
        {{ Form::textarea('scene_number', "$scene->scene_number" ,['style' => 'width: 100%; height:25px;']) }}

          @if (count($errors)>0)
            <div class ="error_message">
            ※シーンNoは入力必須です
            </div>
          @endif
      </div>
    </div>
    <div class="col-xs-6 col-md-6">
      <h3>画像</h3>
        @if( $scene->image )
          <img class="thumbnail" src="/assets/images/{{$scene->image}}" alt="{{$scene->image}}" style="max-width: 100%">
        @else
          <img class="thumbnail" src="/assets/images/noimage.jpg" alt="未設定" style="max-width: 100%">
        @endif
        {{ Form::file('image') }}
    </div>


<!-- レイアウト調整役として設置 -->
  <div class="row">
    <p></p>
  </div>
<!--  -->


  <div class="row" style="margin: 20px 0 5px;">
    <ul class="list-group" >
      <li class="list-group-item">メモ</li>
      <li class="list-group-item" style="word-wrap: break-word;">
        {{ Form::textarea('memo' ,"$scene->memo" ,['style' => 'width: 100%; height:40px;'] )}}
      </li>
    </ul>
  </div>

  <div class="row" style="margin: 5px 0;">
    <ul class="list-group" >
      <li class="list-group-item">撮影場所</li>
      <li class="list-group-item" style="word-wrap: break-word;">
        {{ Form::textarea('place_name', "$scene->place_name", ['style' => 'width: 100%; height:40px;']) }}
      </li>
    </ul>
  </div>

  <div class="row" style="margin: 5px 0;">
    <ul class="list-group" >
      <li class="list-group-item">住所</li>
      <li class="list-group-item" style="word-wrap: break-word;">
        {{ Form::textarea('adress',"$scene->adress",['id' => 'adress'] ,['style' => 'width: 100%; height:40px;'] )}}
      </li>
    </ul>
  </div>

      {{ Form::hidden('lat', "$scene->lat", ['id' => 'poslat']) }}
    {{ Form::hidden('lng', "$scene->lng", ['id' => 'poslng']) }}

    <div class="submit">
      {{ Form::submit('更新する',  ['class' => 'btn btn-default'] ) }}
    </div>
    {!! Form::close() !!}



<!-- 以下マップ表示機能 -->
  <div class="row">
    <h1>Map
      <input type="button" value="元の位置に戻す" onclick="resetMarker(locations)" class="btn btn-default ">
      <input type="button" value="現在位置の住所を取得" onclick="reverseGeo()" class="btn btn-default ">
    </h1>
  </div>

  <div id="map" style="height: 400px; width: 100%;margin-bottom: 80px;">  </div>
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
