<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>いつもMOVI</title>
    <link rel="stylesheet" type="text/css" href="/css/kachinko.css">
    <script src="{{ asset('/assets/javascripts/geolocation.js') }}"></script>
    <script src="{{ asset('/assets/javascripts/jquery-3.3.1.js') }}"></script>
  </head>
  <body>

    <div class="contents">

      <!-- しましまボタン -->
      <div class="shimashima">
        <button type="button" class="get_location" onclick="get_location()">
          <div class="message">Tap to CLAP!</div>
        </button>
      </div>

      <!-- カチンコ音スクリプト -->
      <script>
        function kachinko() {
          // 音声ファイルの読み込み
          var audio = new Audio('/assets/sounds/kachinko.mp3');
          // 音声ファイルの再生
          audio.play();
        }

        // buttonタグのDOMを取得後ボタンをクリックするというイベントに対してkachinkoメソッドを実行
        document.getElementsByTagName("button")[0].addEventListener("click", kachinko);

      </script>

        {{ Form::open(['url' => "/users/products/scenes/cuts/{$cut->id}/kachinko", 'method' => 'post']) }}
        <div>

          <!-- 上ブロック -->
          <div class="ue">

            <!-- 作品名表示 -->
            <div class="title">
              <h3>TITLE</h3>
              <h2>{{$product->title}}</h2>
            </div>
            <!-- 日付表示 -->
            <div class="date">
              <h3>DATE</h3>
              <h2><div id="date"></div></h2>
              <!-- 日付取得スクリプト -->
              <script type="text/javascript">
                var ND,YY,MM,DD,outData;

                ND = new Date();

                YY =ND.getFullYear();
                MM =ND.getMonth() + 1;
                DD =ND.getDate();

                outData = YY + "年" + MM + "月" + DD + "日";

                var target = document.getElementById("date");
                target.innerHTML = outData;

              </script>
            </div>

          </div>

          <!-- 真ん中ブロック -->
          <div class="mannaka">

            <!-- シーンNo.表示 -->
            <div class="scene">
              <h3>SCENE</h3>
              <h2>{{$scene->scene_number}}</h2>
            </div>
            <!-- カットNo.表示 -->
            <div class="cut">
              <h3>CUT</h3>
              <h2> {{$cut->cut_number}}</h2>
            </div>
            <!-- テイクNo.表示 -->
            <div class="take">
              <h3>TAKE</h3>
              <h2>{{$take_number+1}}</h2>
            </div>

          </div>

          <!-- 下ブロック -->
          <div class="shita">

            <!-- ジャッジ・メモ表示 -->
            <div class="iroiro">

              <!-- ジャッジラジオボタン -->
              <div class="judge_box">
                <div class="judge">
                  <div class="OK"><label class="radio_OK"><input name="judge" type="radio" value="1">OK</label></div>
                  <div class="NG"><label class="radio_NG"><input name="judge" type="radio" value="2">NG</label></div>
                  <div class="PD"><label class="radio_PD"><input name="judge" type="radio" value="3">PD</label></div>
                </div>
              </div>
              <!-- メモテキストエリア -->
              <div class="memo_box">
                <div class="memo">
                  {{ Form::textarea('memo', "", ['placeholder' => "memo", 'cols' => '70', 'rows' => '18']) }}
                </div>
              </div>

              <!-- 位置情報保存（非表示） -->
              {{ Form::hidden('lat', '0', ['id' => 'lat']) }}
              {{ Form::hidden('lng', '0', ['id' => 'lng']) }}

              <!-- 保存ボタン -->
              <div class="save_box">
                <div class="save"><input type="submit" value="保存"></div>
              </div>

            </div>

            <!-- テイク・カットへのリンク -->
            <div class="link_box">
              <div class="link">
                <div><h2><a href="/users/products/scenes/cuts/{{$cut->id}}" title="テイク一覧画面へ">テイク一覧画面へ</a></h2></div>
                <div><h2><a href="/users/products/scenes/{{$cut->scene_id}}" title="カット一覧画面へ">カット一覧画面へ</a></h2></div>
              </div>
            </div>

          </div>
        {{ Form::close() }}
  </div>

    </div>

  </body>
</html>
