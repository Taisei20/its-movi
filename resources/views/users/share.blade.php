@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/imagelist.css">
<div class="row">
  <h1 style=" float: left">作品一覧</h1>
</div>

<!-- 作品リンクの表示 -->
<div style="clear: both;"></div>

  <div class="row">
    <div class="contents">
      <ul>
        @foreach($products as $product)
        <div class="content">
          <li>
            <a href="/users/products/share/{{ $product->id }}" title="{{ $product->title }}">
              <div class="image">
              @if($product->image)
                <img src="{{ asset( 'assets/images')}}/{{ $product->image }}">
              @else
                <img src="{{ asset( 'assets/images')}}/171×180.svg">
              @endif
              </div>
              <div>{{ $product->title }}</div>
            </a>
          </li>
        </div>
        @endforeach
      </ul>
    </div>
  </div>



@endsection