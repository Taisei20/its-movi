@extends('layouts.app')

@section('content')
<div class="content">
  <h1 style=" float: left">作品一覧</h1>
</div>

<!-- 作品リンクの表示 -->
<div style="clear: both;"></div>
<div>
    <ul>
      @foreach($products as $product)
        <a href="/users/products/share/{{ $product->id }}" title="" style="float: left; margin-right: 10px">
         <img src="{{ asset( 'assets/images/171×180.svg') }}" alt="..." style="max-width: 100%">
         <li style="list-style: none; font-size: 30px; text-align: center;">{{ $product->title }}</li>
       </a>
      @endforeach
    </ul>
  </div>


@endsection