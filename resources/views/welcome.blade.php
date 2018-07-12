<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>いつもMOVI</title>

    <link rel="stylesheet" type="text/css" href="/css/welcome.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <span class="outline">いつもMOVI</span>
            <p>21世紀のカチンコとなる</p>
            @if(Auth::check())
            <div class="grid-6">
                <button type="submit" class="btn btn-default"><a href="/users/products" class="post">マイページ</button>
                <button type="submit" class="btn btn-default"><a href="/logout" class="post">ログアウト</button>
            </div>
            @else
            <div class="grid-6">
                <button type="submit" class="btn btn-default"><a href="/login" class="post">ログイン</button>
                <button type="submit" class="btn btn-default"><a href="/register" class="post">新規登録</button>
            </div>
            @endif
        </div>
    </div>
</div>