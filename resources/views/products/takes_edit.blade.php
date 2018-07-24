@extends('layouts.app')

@section('content')
{{ Form::open(['url' => "/users/products/scenes/cuts/takes/{$take->id}/edit", 'method' => 'PATCH']) }}


<h4>テイク情報の編集</h4>

  <h3>TAKE:{{ $take->take_number }}</h3>

  <div class="edit">
    @if ($take->judge == 1)
      <div class="OK"><label class="radio_OK"><input name="judge" type="radio" value="1" checked>OK</label></div><P></P>
      <div class="NG"><label class="radio_NG"><input name="judge" type="radio" value="2">NG</label></div><P></P>
      <div class="PD"><label class="radio_PD"><input name="judge" type="radio" value="3">PD</label></div>
    @elseif ($take->judge == 2)
      <div class="OK"><label class="radio_OK"><input name="judge" type="radio" value="1">OK</label></div><P></P>
      <div class="NG"><label class="radio_NG"><input name="judge" type="radio" value="2" checked>NG</label></div><P></P>
      <div class="PD"><label class="radio_PD"><input name="judge" type="radio" value="3">PD</label></div>
    @elseif ($take->judge == 3)
      <div class="OK"><label class="radio_OK"><input name="judge" type="radio" value="1">OK</label></div><P></P>
      <div class="NG"><label class="radio_NG"><input name="judge" type="radio" value="2">NG</label></div><P></P>
      <div class="PD"><label class="radio_PD"><input name="judge" type="radio" value="3" checked>PD</label></div>
    @else
      <div class="OK"><label class="radio_OK"><input name="judge" type="radio" value="1">OK</label></div><P></P>
      <div class="NG"><label class="radio_NG"><input name="judge" type="radio" value="2">NG</label></div><P></P>
      <div class="PD"><label class="radio_PD"><input name="judge" type="radio" value="3">PD</label></div>
    @endif
    <h4>メモ</h4>
    {{ Form::textarea('memo',"$take->memo" ,['style' => 'width: 50%; height:100px;']) }}
      <div>
      <input type="submit" value="テイク情報を更新">
      </div>
  </div>

{{ Form::close() }}

@endsection