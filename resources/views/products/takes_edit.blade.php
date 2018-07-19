@extends('layout')

@section('content')

{{ Form::open(['url' => "/users/products/scenes/cuts/takes/$cut->id/edit", 'method' => 'PATCH']) }}
<h3>TAKE:{{ $take->take_number }}</h3>
<?php if ($take->judge == 1) : ?>
<p>OK</p>
<?php elseif ($take->judge == 2) : ?>
<p>NG</p>
<?php elseif ($take->judge == 3) : ?>
<p>PD</p>
<?php else : ?>
<p>エラー</p>
<?php endif; ?>
<h3>メモ</h3>
<p>{{ $take->memo }}</p>
<input type="submit" value="テイクを編集">
{{ Form::close() }}

@endsection