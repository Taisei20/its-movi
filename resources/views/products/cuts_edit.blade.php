@extends('layouts.app')

@section('content')


<h3>カットNo.の変更</h3>
{{ Form::open(['url' => "/users/products/scenes/cuts/$cut->id/edit", 'method' => 'PATCH']) }}
    <h2>CUT:{{$cut->cut_number}}</h2>
    <input placeholder="変更後のカットNo." type="integer" name="cut_number" value="{{$cut->cut_number}}">
    <input type="submit" value="カットNo.を変更">

  @if (count($errors)>0)
  <div class ="error_message" style="color: red;">
  ※カットNo.は半角英数字で入力してください
  </div>
  @endif

{{ Form::close() }}

@endsection
