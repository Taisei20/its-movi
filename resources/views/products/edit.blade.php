@extends('layouts.app')

@section('content')
<style>
.submit{
  margin:15px 0;
}

.list-right{
  float: right;
}

</style>

  {!! Form::open( array('url' => "users/products/$product->id",
                         'method' => 'PATCH',
                         'files' => 'true') ) !!}

    <div class="row">
      <h3>
        作品名
        <span style="color: red; font-size: 15px; padding-left: 5px;">※入力必須</span>
      </h3>

      {{ Form::textarea('title', "$product->title" ,['style' => 'width: 100%; height:40px;']) }}

        @if (count($errors)>0)
          <div class ="error_message">
            ※作品名は入力必須です
          </div>
        @endif
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-6">
        <h3>作品イメージ</h3>
          @if( $product->image )
            <img class="thumbnail" src="/assets/images/{{$product->image}}" alt="{{$product->image}}" style="max-width: 100%">
          @else
            <img class="thumbnail" src="/assets/images/noimage.jpg" alt="未設定" style="max-width: 100%">
          @endif
        {{ Form::file('image') }}
      </div>
      <!-- <div class="col-xs-5 col-md-5 col-md-offset-1"> -->
      <div class="col-xs-6 col-md-6" style="margin-top:60px">
        <ul class="list-group">
  <!--         <li class="list-group-item">作品分数</li> -->
          <li class="list-group-item">作品時間(分)</li>
          <li class="list-group-item" style="word-wrap: break-word;">
              {{ Form::text('running_time', "$product->running_time", ['style' => 'width: 100%; height:40px;','maxlength' => '8'] )}}
          </li>
        </ul>

        <ul class="list-group">
          <li class="list-group-item">作品URL</li>
          <li class="list-group-item" style="word-wrap: break-word;">
            {{ Form::text('url' ,"$product->url" ,['style' => 'width: 100%; height:40px;'] )}}
          </li>
        </ul>
      </div>
    </div>

    <div class="row" style="margin: 20px 0 5px;">
      <ul class="list-group" >
        <li class="list-group-item">あらすじ</li>
        <li class="list-group-item" style="word-wrap: break-word;">
          {{ Form::textarea('story',"$product->story" ,['style' => 'width: 100%; height:40px;']) }}
        </li>
      </ul>
    </div>


    <div class="row" style="margin: 5px 0;">
      <ul class="list-group" >
        <li class="list-group-item">コメント</li>
        <li class="list-group-item" style="word-wrap: break-word;">
          {{ Form::textarea('comment' ,"$product->comment" ,['style' => 'width: 100%; height:40px;'] )}}
        </li>
      </ul>
    </div>

<!--     <div class="row">
      <div class="col-xs-5 col-md-5">

        <h3>作品時間(分)</h3>
          @if(!$product->running_time)
            {{ Form::text('running_time', 0, ['style' => 'width: 100%; height:40px;'] )}}
          @else
            {{ Form::text('running_time',"$product->running_time" ,['style' => 'width: 100%; height:40px;'] )}}
          @endif

          @if (count($errors)>0)
            <div class ="error_message" style="color:red;">
              ※半角英数字で入力してください
            </div>
          @endif

      </div>
      <div class="col-xs-5 col-md-5 col-md-offset-1">
        <h3>作品URL</h3>
        {{ Form::text('url' ,"$product->url" ,['style' => 'width: 100%; height:40px;'] )}}
      </div>
    </div>
 -->
    <div class="submit">
      {{ Form::submit('更新する',  ['class' => 'btn btn-default'] ) }}
    </div>

  {!! Form::close() !!}

@endsection
