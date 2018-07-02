@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>カット一覧</title>
  </head>
  <body>
  <div>
    {{ Form::open(['url' => "/users/products/scenes/{$id}", 'method' => 'post']) }}
        <input placeholder="追加するカット No." type="integer" name="cut_number">
        <input type="submit" value="カットを追加">
    {{ Form::close() }}
  </div>

  <div>
    @foreach($cuts as $cut)
    <a href="/users/products/scenes/cuts/{{ $cut->id }}"><li>カットNo.{{ $cut->cut_number }}</li></a>

    <div><a href="/users/products/scenes/cuts/{{ $cut->id }}/kachinko" title="カチンコ画面へ">カチンコ画面へ</a></div>
    @endforeach
  </div>


  </body>
</html>

@endsection