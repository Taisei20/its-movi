@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/imagelist.css">

</style>
<style>

.new{
  display: inline-block;
  font-size: 24px;
  margin:14px 0 0 50px;
}

</style>

<div class="content">
  <h1 style=" float: left">作品一覧</h1>
  <a class=" new btn btn-default" href="/users/products/create" >新規作成</a>
</div>

<div style="clear: both;"></div>

<div class="row">
  <div class="contents">
    <ul>
      @foreach($products as $product)
      <div class="content">
        <li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <div class="image">
                @if($product->image)
                <img src="/assets/images/{{ $product->image }}" alt="{{ $product->title }}">
                @else
                <img src="/assets/images/171×180.svg" alt="{{ $product->title }}">
                @endif

              </div>
              <div>{{ $product->title }}<span class="caret"></span></div>
            </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-btn glyphicon glyphicon-share"></i>
                    作品情報
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-btn glyphicon glyphicon-log-out"></i>
                    作品情報編集
                  </a>
                  <a href="/users/products/{{$product->id}}">
                    <i class="fa fa-btn glyphicon glyphicon-share"></i>
                    シーン一覧
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-btn glyphicon glyphicon-log-out"></i>
                    削除
                  </a>
                </li>
              </ul>
            </li>
        </li>
      </div>
      @endforeach
    </ul>
  </div>
</div>

@endsection