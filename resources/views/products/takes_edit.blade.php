@extends('layouts.app')

@section('content')

{{ Form::open(['url' => "/users/products/scenes/cuts/takes/{$take->id}/edit", 'method' => 'PATCH']) }}
  <h3>TAKE:{{ $take->take_number }}</h3>
  @if ($take->judge == 1)
  <p>OK</p>
  @elseif ($take->judge == 2)
  <p>NG</p>
  @elseif ($take->judge == 3)
  <p>PD</p>
  @else
  <p>エラー</p>
  @endif
  <h3>メモ</h3>
  <p>{{ $take->memo }}</p>
  <div class="OK"><label class="radio_OK"><input name="judge" type="radio" value="1">OK</label></div>
  <div class="NG"><label class="radio_NG"><input name="judge" type="radio" value="2">NG</label></div>
  <div class="PD"><label class="radio_PD"><input name="judge" type="radio" value="3">PD</label></div>
  <textarea name="memo" placeholder="memo" cols="70" rows="18"></textarea>
  <input type="submit" value="テイクを編集">
{{ Form::close() }}

@endsection