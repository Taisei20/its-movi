@extends('layouts.app')

@section('content')


    {{ Form::open(['url' => 'users/products', 'method' => 'post'] ) }}
    
    <div style="margin: 8px 0">
      <h2>作品名</h1>
      {{ Form::textarea('title', '' , ['style' => 'width: 400px; height:40px;']) }}
    </div>

    <div style="margin: 8px 0">
      {{ Form::submit('作成する',  ['class' => 'btn btn-default'] ) }}
    </div>

    {{ Form::close() }}

@endsection