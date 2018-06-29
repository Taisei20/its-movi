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
    {{ Form::open(['url' => '/users/products/scenes/cuts', 'method' => 'post']) }}
        <input placeholder="追加するカット No." type="integer" name="cut_number">
        <input type="submit" value="カットを追加">
    {{ Form::close() }}
  </div>

  <div>
    @foreach($cuts as $cut)
    <h3>カットNo.{{ $cut->cut_number }}</h3>
    @endforeach
  </div>


  </body>
</html>

@endsection