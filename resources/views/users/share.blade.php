@extends('layouts.app')

@section('content')

<style>
.copy{
  float: right;
}

#copy{
  width: 250px;
}

</style>

<link rel="stylesheet" type="text/css" href="/css/imagelist.css">
<script src="{{ asset('assets/javascripts/copy.js') }}" ></script>

<div class="content">

  <div class="row">
    <!-- copy form btn -->
  <div class="copy">
    <input id="copy" type="text" value="https://its-movi.herokuapp.com/users/share/{{ $name->id }}">
    <button class="btn btn-default" onclick="copy()"><i class="fa fa-btn glyphicon glyphicon-paperclip"></i></button>
  </div>

    <h1 style=" float: left">{{ $name->name }}さんの作品一覧</h1>
  </div>

  <!-- 作品リンクの表示 -->
  <div style="clear: both;"></div>

  <div class="row">
    <div class="contents">
      <ul>
        @foreach($products as $product)
        <div class="content_list">
          <li>
            <a href="/users/products/share/{{ $product->id }}" title="{{ $product->title }}">
              <div class="image">
              @if($product->image)
                <img src="{{ asset( 'assets/images')}}/{{ $product->image }}">
              @else
                <img src="{{ asset( 'assets/images')}}/noimage.jpg">
              @endif
              </div>
              <div class="text">{{ $product->title }}</div>
            </a>
          </li>
        </div>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@endsection