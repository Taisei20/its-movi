@extends('layouts.app')

@section('content')
  <div class="row">
    <h1>{{ $dtlProduct->title }}</h1>
  </div>


  <div class="row">
    <div class="col-xs-6 col-md-6">
      <a href="#" class="thumbnail ">
        <img src="{{ asset( 'assets/images/171×180.svg') }}" alt="..." style="max-width: 100%">
  <!--       <img src="{{ asset( 'assets/images/kachinko.jpg') }}" alt="..." style="max-width: 100%"> -->
      </a>
    </div>

    <div class="col-xs-6 col-md-6">
      <ul class="list-group">
        <li class="list-group-item">作品分数</li>
        <li class="list-group-item" style="word-wrap: break-word;">15</li>
      </ul>

      <ul class="list-group">
        <li class="list-group-item">作品URL</li>
        <li class="list-group-item" style="word-wrap: break-word;"><a href="" title="">Vestibulum at eros</a></li>
      </ul>
    </div>
  </div>

  <div class="row">
    <ul class="list-group">
      <li class="list-group-item">あらすじ</li>
      <li class="list-group-item" style="word-wrap: break-word;">Vestibulum at erosaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaerosaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</li>
    </ul>
  </div>

  <div class="row">
    <h1>Map</h1>
  </div>


@endsection