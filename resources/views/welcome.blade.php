<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>いつもMOVI</title>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
            background-color: #486d46;
            background-image: url("/assets/images/welcome.png");
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
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

        .fa-btn {
            margin-right: 30px;
        }
    </style>
</head>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>いつもMOVI</h1>
            <p>あなたの心にいつもMOVI</p>
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