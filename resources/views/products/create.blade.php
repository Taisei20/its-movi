@extends('layouts.app')

@section('content')

<style>
.submit{
  margin:8px 0;
}

</style>

    {!! Form::open( array('url' => 'users/products',
                         'method' => 'post',
                         'files' => 'true') ) !!}

    <div class="row">
      <div class="col-xs-5 col-md-5">
        <h3>作品名<span style="color: red; font-size: 15px; padding-left: 5px;">※入力必須</span></h3>
        {{ Form::textarea('title', '' , ['style' => 'width: 100%; height:40px;']) }}

          @if (count($errors)>0)
            <div class ="error_message">
            ※作品名は入力必須です
            </div>
          @endif
      </div>

      <div class="col-xs-5 col-md-5 col-md-offset-1">
        <h3>作品イメージ</h3>
        {{ Form::file('image') }}
      </div>
    </div>

    <div class="row">
      <div class="col-xs-5 col-md-5">
        <h3>あらすじ</h3>
        {{ Form::textarea('story','',['style' => 'width: 100%; height:200px;']) }}
      </div>
      <div class="col-xs-5 col-md-5 col-md-offset-1">
        <h3>コメント</h3>
        {{ Form::textarea('comment','',['style' => 'width: 100%; height:200px;'])}}
      </div>
    </div>

    <div class="submit">
      {{ Form::submit('作成する',  ['class' => 'btn btn-default'] ) }}
    </div>

    {!! Form::close() !!}

@endsection