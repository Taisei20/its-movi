<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>テイク一覧</title>
  </head>
  <body>
@foreach($takes as $take)
<h3>テイク</h3>
<p>{{ $take->take_number }}</p>
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
<h3>カット</h3>
<p>{{ $take->cut_id }}</p>
@endforeach
  </body>
</html>