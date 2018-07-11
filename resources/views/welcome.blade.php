<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>いつもMOVI</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        html, body {
            height: 100%;
        }

        title {
            font-size: 50px;
        }

        h1,body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'メイリオ';
            background-color: #000000;
            background-image: url("/assets/images/welcome.png");
            background-size: contain;
            background-attachment: fixed;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
            font-size: 38px;
        }

        .content {
            text-align: center;
            display: inline-block;
        }
    </style>
</head>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>いつもMOVI</h1>
            <p>映画製作支援サイト</p>
            @if(Auth::check())
            <div class="grid-6">
                <a href="/users/products" class="post">マイページ</a>
                <a href="/logout" class="post">ログアウト</a>
            </div>
            @else
            <div class="grid-6">
                <a href="/login" class="post">ログイン</a>
                <a href="/register" class="post">新規登録</a>
            </div>
            @endif
        </div>
    </div>
</div>