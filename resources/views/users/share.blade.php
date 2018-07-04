@extends('layouts.app')

@section('content')
<div class="content">
  <h1 style=" float: left">作品一覧</h1>
</div>
</div>

  <div class="col-md-10 col-md-offset-1">
    <ul>
      @foreach($products as $product)
        <a href="/users/products/share/{{ $product->id }}" title="">
         <li >{{ $product->title }}</li>
       </a>
      @endforeach
    </ul>
  </div>
</div>

@endsection