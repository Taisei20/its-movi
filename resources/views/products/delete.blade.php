@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>削除画面</title>
    <!-- <link rel="stylesheet" type="text/css" href="/css/cuts.css"> -->
  </head>
  <body>
    <h2>カット:{{ $cut->cut_number }}を削除してよろしいですか</h2>
    <a href="/users/products/scenes/cuts/{{ $cut->id }}/delete">はい</a>
    <a href="/users/products/scenes/{{$cut->scene_id}}">いいえ</a>
  </body>

  @endsection