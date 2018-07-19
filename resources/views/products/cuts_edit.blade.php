@extends('layouts.app')

@section('content')

{{ Form::open(['url' => "/users/products/scenes/cuts/$cut->id/edit", 'method' => 'PATCH']) }}
    <h2>CUT:{{$cut->cut_number}}</h2>
    <input placeholder="編集するCUT No." type="integer" name="cut_number" value="{{$cut->cut_number}}">
    <input type="submit" value="CUTを編集">

  @if (count($errors)>0)
  <div class ="error_message">
  ※CUT No.は半角英数字で入力してください
  </div>
  @endif

{{ Form::close() }}

@endsection