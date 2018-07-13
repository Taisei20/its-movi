@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>シーン一覧</title>
    <link rel="stylesheet" type="text/css" href="/css/scenes.css">
    <link rel="stylesheet" type="text/css" href="/css/imagelist.css">
  </head>
  <body>


  <div>
    {{ Form::open(['url' => "/users/products/{$id}", 'method' => 'post']) }}

        <input placeholder="追加するシーン No." type="integer" name="scene_number">
        <input type="submit" value="シーンを追加">

      @if (count($errors)>0)
      <div class ="error_message">
      ※シーンNo.は半角英数字で入力してください
      </div>
      @endif

    {{ Form::close() }}
  </div>

  <div class="contents">
    <h2>{{$title->title}}</h2>
    @foreach($scenes as $scene)
    <div class="content">
        <li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <div class="image">
                @if($scene->image)
                <img src="/assets/images/{{ $scene->image }}" alt="シーン{{ $scene->scene_number }}">
                @else
                <img src="/assets/images/171×180.svg" alt="{{ $scene->scene_number }}">
                @endif

              </div>
              <div>シーン{{ $scene->scene_number }}<span class="caret"></span></div>
            </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-btn glyphicon glyphicon-share"></i>
                    シーン情報
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-btn glyphicon glyphicon-log-out"></i>
                    シーン情報編集
                  </a>
                  <a href="/users/products/scenes/{{ $scene->id }}">
                    <i class="fa fa-btn glyphicon glyphicon-share"></i>
                    カット一覧
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-btn glyphicon glyphicon-log-out"></i>
                    削除
                  </a>
                </li>
              </ul>
            </li>
        </li>
      </div>
    @endforeach
  </div>


  </body>
</html>

@endsection