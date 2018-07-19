@extends('layouts.app')

@section('content')

{{ Form::open(['url' => "/users/products/scenes", 'method' => 'PATCH']) }}
    <h2>カット{{$cut->id}}</h2>
    <input placeholder="編集するカット No." type="integer" name="cut_number" value="{{ $cut->id }}">
    <input type="submit" value="カットを編集">

  @if (count($errors)>0)
  <div class ="error_message">
  ※カットNo.は半角英数字で入力してください
  </div>
  @endif

{{ Form::close() }}

@endsection