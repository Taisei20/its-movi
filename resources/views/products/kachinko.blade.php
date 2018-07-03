<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>いつもMOVI</title>
    <link rel="stylesheet" type="text/css" href="/css/kachinko.css">
  </head>
  <body>

    <div class="contents">
        {{ Form::open(['url' => "/users/products/scenes/cuts/{$cut->id}/kachinko", 'method' => 'post']) }}
        <div>
          <div class="shimashima">
            
          </div>
          <div class="ue">
          <div class="title">
            <h3>
              {{$product->title}}
            </h3>
          </div>
          <div class="date">
            
          </div>
        </div>
          <div class="mannaka">
          <div class="scene">
            <h3>
              SCENE {{$scene->scene_number}}
            </h3>
          </div>
          <div class="cut">
            <h3>
              CUT {{$cut->cut_number}}
            </h3>
          </div>
          <div class="take">
            <h3>
              TAKE {{$take->take_number+1}}
            </h3>
          </div>
          </div>
          <div class="shita">
          <div class="iroiro">
            <div>
              <input name="judge" type="radio" value="1">OK
              <input name="judge" type="radio" value="2">NG
              <input name="judge" type="radio" value="3">PD
            </div>
            <div><textarea cols="30" name="memo" placeholder="memo" rows="10"></textarea></div>
            <div><input type="submit" value="保存"></div>
            <div><a href="/users/products/scenes/cuts/{{$cut->id}}" title="テイク一覧画面へ">テイク一覧画面へ</a></div>
    <div><a href="/users/products/scenes/{{$cut->scene_id}}" title="カット一覧画面へ">カット一覧画面へ</a></div>

          </div>
          <div class="play">
          </div>
        </div>
        {{ Form::close() }}
  </div>

    </div>

  </body>
</html>