@extends('layouts.app')

@section('content')
<div class="row">
  <h1 style=" float: left">作品一覧</h1>
</div>

<!-- 作品リンクの表示 -->
<div style="clear: both;"></div>

  <div class="row">
    <ul>
      @foreach($products as $product)
        <a href="/users/products/share/{{ $product->id }}" title="" style="float: left; margin-right: 10px">
         <li style="list-style: none; font-size: 30px; text-align: center; word-wrap: break-word;">{{ $product->title }}</li>
         @if($product->image)
         <img class="thumbnail " src="{{ asset( 'assets/images')}}/{{ $product->image }}" style="max-width: 170px;">
         @else
         <img class="thumbnail " src="{{ asset( 'assets/images')}}/171×180.svg" style="max-width: 170px; max-height: 170px;">
         @endif
       </a>
      @endforeach
    </ul>
  </div>



@endsection