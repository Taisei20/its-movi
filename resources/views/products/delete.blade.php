@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>削除画面</title>

    <style>
    a:hover { color: blue }
    .mojimoji {
      display: block;
      margin-top: 20px;
    }
  </style>
  </head>
  <body>
    @if(isset($cut))
    <h2>CUT:{{ $cut->cut_number }}を削除してよろしいですか</h2>
      <a href="/users/products/scenes/cuts/{{ $cut->id }}/delete" style="font-size:20pt;font-weight:bold;" class="mojimoji">はい</a>
      <a href="/users/products/scenes/{{$cut->scene_id}}" style="font-size:20pt;font-weight:bold;" class="mojimoji">いいえ</a>
    @elseif(isset($scene))
    <h2>SCENE:{{ $scene->scene_number }}を削除してよろしいですか</h2>
      <a href="/users/products/scenes/{{ $scene->id }}/delete" style="font-size:20pt;font-weight:bold;" class="mojimoji">はい</a>
      <a href="/users/products/{{$scene->product_id}}" style="font-size:20pt;font-weight:bold;" class="mojimoji">いいえ</a>
    @elseif(isset($product))
    <h2>{{ $product->title }}を削除してよろしいですか</h2>
      <a href="/users/products/{{ $product->id }}/delete" style="font-size:20pt;font-weight:bold;" class="mojimoji">はい</a>
      <a href="/users/products" style="font-size:20pt;font-weight:bold;" class="mojimoji">いいえ</a>
    @endif
  </body>

  @endsection