<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>いつもMOVI</title>
  </head>
  <body>
    <div>
        {{ Form::open(['url' => '/users/products/scenes/cuts/kachinko', 'method' => 'post']) }}
            <h3>
                    {{$product->title}}
            </h3>
            <h3>
                    SCENE {{$scene->scene_number}}
            </h3>
            <input placeholder="CUT No." type="integer" name="cut_id">
            <input placeholder="TAKE No." type="integer" name="take_number">
            <input name="judge" type="radio" value="1">OK
            <input name="judge" type="radio" value="2">NG
            <input name="judge" type="radio" value="3">PD
            <textarea cols="30" name="memo" placeholder="memo" rows="10"></textarea>
            <input type="submit" value="SENT">
        {{ Form::close() }}
    </div>

  </body>
</html>