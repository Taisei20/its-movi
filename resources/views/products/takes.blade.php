<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>テイク一覧</title>
  </head>
  <body>
  	  	<div><a href="/users/products/scenes/cuts/{{ $cut->id }}/kachinko" title="カチンコ画面へ">カチンコ画面へ</a></div>


@foreach($takes as $take)
<p>==================================</p>
<h3>カットNo.{{ $take->cut_id }}</h3>
<h3>テイクNo.{{ $take->take_number }}</h3>
<?php if ($take->judge == 1) : ?>
<p>NG</p>
<?php elseif ($take->judge == 2) : ?>
<p>OK</p>
<?php elseif ($take->judge == 3) : ?>
<p>PD</p>
<?php else : ?>
<p>エラー</p>
<?php endif; ?>
<h3>メモ</h3>
<p>{{ $take->memo }}</p>
@endforeach
<p>==================================</p>

  </body>
</html>