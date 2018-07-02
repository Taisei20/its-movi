@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>シーン一覧</title>
  </head>
  <body>
  <div>
    {{ Form::open(['url' => "/users/products/{$id}", 'method' => 'post']) }}
        <input placeholder="追加するシーン No." type="integer" name="scene_number">
        <input type="submit" value="シーンを追加">
    {{ Form::close() }}
  </div>

  <div>
    @foreach($scenes as $scene)
    <a href="/users/products/scenes/{{ $scene->id }}" title=""><li>シーンNo.{{ $scene->scene_number }}</li></a>
    @endforeach
  </div>


  </body>
</html>

@endsection