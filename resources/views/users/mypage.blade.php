@extends('layouts.app')

@section('content')
<style>
  
.new{
  display: inline-block;
  font-size: 24px;
  margin:14px 0 0 50px;
}

</style>

<div class="content">
  <h1 style=" float: left">作品一覧</h1>
  <a class=" new btn btn-default" href="" >新規作成</a>
</div>

<div style="clear: both;"></div>

<div class="row">
<div class="products">
<ul>
  @foreach($products as $product)
   <li >{{ $product->title }}</li> 
  @endforeach
</ul>
</div>
</div>

@endsection