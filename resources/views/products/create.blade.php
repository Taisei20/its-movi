@extends('layouts.app')

@section('content')

<style>
.submit{
  margin:8px 0;
}

</style>

    {{ Form::open(['url' => 'users/products', 'method' => 'post'] ) }}

    <div class="row">
      <div class="col-xs-6 col-md-6">
        <h3>作品名</h3>
        {{ Form::textarea('title', '' , ['style' => 'width: 100%; height:40px;']) }}
      </div>
      <div class="col-xs-5 col-md-5 col-md-offset-1">
        <h3>作品イメージ</h3>
        {{ Form::file('image') }}
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-6">
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

    {{ Form::close() }}

@endsection