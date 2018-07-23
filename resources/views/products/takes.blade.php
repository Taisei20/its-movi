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
    <div class="kachi">
  	  	<div class="message">
          <a href="/users/products/scenes/cuts/{{ $cut->id }}/kachinko" >
            <img src="/assets/images/kachinko-icon.jpeg" width="45" height="45">
            <span class="remark">カチンコ画面へ</span>
          </a>
        </div>
      </div>

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

          <div class = "moji message">
            <a href="/users/products/scenes/cuts/takes/{{ $take->id }}/edit">
              <img src="/assets/images/pen.jpeg" width="45" height="45">
              <span class="remark">テイク情報編集</span>
            </a>
          </div>
          <div class = "moji message">
            <div class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <img src="/assets/images/memo.jpeg" width="45" height="45">
                <span class="remark">メモ表示</span>
              </a>
              <div class="dropdown-menu memo" role="menu">
                {{ $take->memo }}
              </div>
            </div>
          </div>

        </div>
      </li>
    @endforeach
    </ul>
  </div>

  </body>
</html>

@endsection