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
    <h2>カット:{{ $cut->cut_number }}</h2>
  	  	<div><a href="/users/products/scenes/cuts/{{ $cut->id }}/kachinko" title="カチンコ画面へ">カチンコ画面へ</a></div>

<div class = "ichiran">
<ul>
@foreach($takes as $take)
<!-- <p>==================================</p> -->
<li>
<div class="hako">
<div class = "moji">テイク:{{ $take->take_number }}</div>
@if ($take->judge == 1)
<div class = "moji">OK</div>
@elseif ($take->judge == 2)
<div class = "moji">NG</div>
@elseif ($take->judge == 3)
<div class = "moji">PD</div>
@else
<div class = "moji">エラー</div>
@endif
<div class = "moji"><img src="/assets/images/pen.jpeg" width="45" height="45"></div>
<div class = "moji">メモ:{{ $take->memo }}</div>
</div>
</li>
@endforeach
</ul>
</div>
<!-- <p>==================================</p> -->

  </body>
</html>

@endsection