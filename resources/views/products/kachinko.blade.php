<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>いつもMOVI</title>
    <linke rel="stylesheet" herf="css/kachinko.css">
  </head>
  <body>
    <div>
        {{ Form::open(['url' => "/users/products/scenes/cuts/{$cut->id}/kachinko", 'method' => 'post']) }}
            <h3>
              {{$product->title}}
            </h3>
            <h3>
              SCENE {{$scene->scene_number}}
            </h3>
            <h3>
              CUT {{$cut->cut_number}}
            </h3>
            <h3>
              TAKE <input placeholder="No." type="integer" name="take_number"></div>
            </h3>
            <div>
              <input name="judge" type="radio" value="1">OK
              <input name="judge" type="radio" value="2">NG
              <input name="judge" type="radio" value="3">PD
            </div>
            <div><textarea cols="30" name="memo" placeholder="memo" rows="10"></textarea></div>
            <div><input type="submit" value="保存"></div>
        {{ Form::close() }}
    </div>

  </body>
</html>