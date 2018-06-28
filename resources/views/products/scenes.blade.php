<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>シーン一覧</title>
  </head>
  <body>
  <div>
    {{ Form::open(['url' => '/users/products/scenes', 'method' => 'post']) }}
        <input placeholder="追加するシーン No." type="integer" name="scene_number">
        <input type="submit" value="シーンを追加">
    {{ Form::close() }}
  </div>

  <div>
    @foreach($scenes as $scene)
    <h3>シーン</h3>
    <p>{{ $scene->scene_number }}</p>
    @endforeach
  </div>


  </body>
</html>