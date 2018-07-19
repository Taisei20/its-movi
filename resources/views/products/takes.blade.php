@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>テイク一覧</title>
    <link rel="stylesheet" type="text/css" href="/css/takes.css">
  </head>
  <body>
    <h2>CUT:{{ $cut->cut_number }}</h2>
  	  	<div><a href="/users/products/scenes/cuts/{{ $cut->id }}/kachinko" title="カチンコ画面へ"><img src="/assets/images/kachinko-icon.jpeg" width="45" height="45">カチンコ画面へ</a></div>

  <div class = "ichiran">
    <ul>
    @foreach($takes as $take)
      <li>
        <div class="hako">
          <div class = "moji">TAKE:{{ $take->take_number }}</div>
            @if ($take->judge == 1)
              <div class = "moji">OK</div>
            @elseif ($take->judge == 2)
              <div class = "moji">NG</div>
            @elseif ($take->judge == 3)
              <div class = "moji">PD</div>
            @else
              <div class = "moji">エラー</div>
            @endif
          <div class = "moji">
            <a href="/users/products/scenes/cuts/takes/{{ $take->id }}/edit" title="テイク編集画面へ"><img src="/assets/images/pen.jpeg" width="45" height="45"></a></div>
          <div class = "moji">メモ:{{ $take->memo }}</div>
        </div>
      </li>
    @endforeach
    </ul>
  </div>

  </body>
</html>

@endsection