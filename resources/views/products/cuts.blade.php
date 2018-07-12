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
    <h2>シーン:{{$nav_scene->scene_number}}</h2>
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

  <div>
    <ul>
    @foreach($cuts as $cut)
    <li class="moji">カット:{{ $cut->cut_number }}
      <a href="/users/products/scenes/cuts/{{ $cut->id }}">
        <img src="/assets/images/take-icon.jpeg" width="50" height="50">
      </a>
      <a href="/users/products/scenes/cuts/{{ $cut->id }}/kachinko" title="カチンコ画面へ">
        <img src="/assets/images/kachinko-icon.jpeg" width="50" height="50">
      </a>
    </li>
    @endforeach
    </ul>

  </div>


  </body>
</html>

@endsection