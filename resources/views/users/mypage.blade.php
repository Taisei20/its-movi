@extends('layouts.app')

@section('content')
<style>
.new{
  display: inline-block;
  font-size: 24px;
  margin:14px 0 0 50px;
}

</style>

<div class="products">
  <h1 style=" float: left">作品一覧</h1>
  <a class=" new btn btn-default" href="" >新規作成</a>
  @foreach($products as $product)
  <p>{{ $product->name }}</p>
  @endforeach
</div>

@endsection