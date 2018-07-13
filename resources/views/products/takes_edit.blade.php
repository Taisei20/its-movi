@extends('layout')

@section('content')
<div class="contents row">
    <div class="container">
        {{ Form::open(['url' => "takes/$takes->id", 'method' => 'PATCH']) }}
        <h3>編集する</h3>

        <p>==================================</p>
        <h3>カットNo.{{ $cut->cut_number }}</h3>
        <h3>テイクNo.{{ $take->take_number }}</h3>
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
        <p>==================================</p>

        <input placeholder="Image Url" type="text" name="image" value="{{$tweet->image}}" autofocus="true">
        <textarea cols="30" name="text" placeholder="text" rows="10">{{$tweet->text}}</textarea>
        <input type="submit" value="SENT">
        {{ Form::close() }}
    </div>
</div>
@endsection