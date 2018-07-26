@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="/css/erorrs.css">

<h3>カットNo.の変更</h3>
{{ Form::open(['url' => "/users/products/scenes/cuts/$cut->id/edit", 'method' => 'PATCH']) }}

          @if (count($errors) > 0)
            <div id="error_explanation">
              <ul class="erorr">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

    <h2>CUT:{{$cut->cut_number}}</h2>
    <input placeholder="変更後のカットNo." type="integer" name="cut_number" value="{{$cut->cut_number}}" maxlength='8'>
    <input type="submit" value="カットNo.を変更">

{{ Form::close() }}

@endsection
