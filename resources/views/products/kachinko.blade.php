<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>いつもMOVI</title>
  </head>
  <body>
    <div>
        {{ Form::open(['url' => '/products/kachinko', 'method' => 'post']) }}
            <h3>
                    作品名
            </h3>
            <h3>
                    SCENE No.
            </h3>
            <input placeholder="CUT No." type="integer" name="cut_id">
            <input placeholder="TAKE No." type="integer" name="take_number">
            <input placeholder="NG=0, OK=1, PD=2" type="integer" name="judge">
            <textarea cols="30" name="memo" placeholder="memo" rows="10"></textarea>
            <input type="submit" value="SENT">
        {{ Form::close() }}
    </div>

  </body>
</html>