@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>カット一覧</title>
    <link rel="stylesheet" type="text/css" href="/css/cuts.css">
  </head>
  <body>

  <div>
    <h2>SCENE:{{$nav_scene->scene_number}}</h2>
    {{ Form::open(['url' => "/users/products/scenes/{$id}", 'method' => 'post']) }}
        <input placeholder="追加するカット No." type="integer" name="cut_number">
        <input type="submit" value="カットを追加">

      @if (count($errors)>0)
      <div class ="error_message">
      ※カットNo.は半角英数字で入力してください
      </div>
      @endif

    {{ Form::close() }}
  </div><br>

  <div class = "ichiran">
    <ul>
    @foreach($cuts as $cut)
    <li>
      <div class="hako">
    <div class="moji">CUT:{{ $cut->cut_number }}</div>
      <div class="moji message">
        <a href="/users/products/scenes/cuts/{{ $cut->id }}">
        <img src="/assets/images/take-icon.jpeg" width="45" height="45">
        <span class="remark">テイク一覧</span>
      </a>
    </div>
    <div class="moji message">
      <a href="/users/products/scenes/cuts/{{ $cut->id }}/kachinko" title="カチンコ画面へ">
        <img src="/assets/images/kachinko-icon.jpeg" width="45" height="45">
        <span class="remark">カチンコ画面へ</span>
      </a>
    </div>
    <div class="moji message">
      <a href="/users/products/scenes/cuts/{{ $cut->id }}/edit" title="カット編集画面へ">
        <img src="/assets/images/pen.jpeg" width="45" height="45">
        <span class="remark">カットNo.変更</span>
      </a>
    </div>
    <div class="moji message">
      <a href="/users/products/scenes/cuts/{{ $cut->id }}/alart">
        <img src="/assets/images/gomibako.jpeg" width="45" height="45">
        <span class="remark">シーンを削除</span>
      </a>
    </div>
  </div>
    </li>
    @endforeach
    </ul>

  </div>


  </body>
</html>

@endsection