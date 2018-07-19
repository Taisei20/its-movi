@extends('layout')

@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>カット編集</title>
    <link rel="stylesheet" type="text/css" href="/css/cuts.css">
  </head>

  <body>
    <div class="contents row">
    <div class="container">
        <h3>テイク編集</h3>
        {{ Form::open(['url' => "takes", 'method' => 'PATCH']) }}
        <p>==================================</p>
        <h3>CUT:{{ $cut->cut_number }}</h3>
        <h3>TAKE:{{ $take->take_number }}</h3>
        <?php if ($take->judge == 1) : ?>
        <p>OK</p>
        <?php elseif ($take->judge == 2) : ?>
        <p>NG</p>
        <?php elseif ($take->judge == 3) : ?>
        <p>PD</p>
        <?php else : ?>
        <p>エラー</p>
        <?php endif; ?>
        <h3>メモ</h3>
        <p>{{ $take->memo }}</p>
        <p>==================================</p>
        <input type="submit" value="SENT">
        {{ Form::close() }}
    </div>
  </body>
</html>
@endsection