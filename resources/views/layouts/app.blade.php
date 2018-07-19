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
    <link rel="stylesheet" href="/assets/stylesheets/bootstrap.css">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .header {
            position: fixed;
            z-index: 10;
        }

        .ue {
            height: 60px;
            width: 100vw;
            margin-top: -20px;
        }

        .mannaka {
            padding-top: 120px;
            margin-bottom: 80px;
            z-index: 0;
        }

        .shita {
            height: 60px;
            width: 100vw;
            position: fixed;
            bottom: 0;
        }

        .film-image {
            height: 100%;
            width: 100%;
        }

        .navbar-default {
            background-color: #000000;
            color: white;
            border-radius:0;
            border-color: #000000;
        }

        .navbar-default .navbar-brand {
          color: #FFFFFF;
        }

        .navbar-default a.navbar-brand:hover {
          background-color: #222;
          color: #FFFFFF;
        }

        .dropdown-menu {
            background-color: #F8F8F8;
            border: 1px solid #F8F8F8;
            border: 1px solid #F8F8F8(0, 0, 0, .15);
            -webkit-box-shadow: 0 6px 12px rgba(94, 136, 129, 0.35);
            box-shadow: 0 6px 12px rgba(94, 136, 129, 0.35);
        }

        .navbar > .container .navbar-brand,
        .navbar > .container-fluid .navbar-brand {
            margin: 0;
        }

        .navbar-default .navbar-nav > li > a {
            color: #ffffff;
        }

        .navbar-default .navbar-nav > li > a:hover {
            background-color: #222222;
            color: #ffffff;
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:focus,
        .navbar-default .navbar-nav>.open>a:hover {
          color: #FFFFFF;
          background-color: #222222;
        }

        .dropdown-menu > li > a {
          color: #000000;
        }

        .dropdown-menu > li > a:hover {
          color: #000000;
          background-color: #EEEEEE;
        }

    </style>
</head>
<body id="app-layout">
<div class="header">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    いつもMOVI
                </a>
            </div>

<!-- ログインユーザの名前表示 -->


            <div class="collapse navbar-collapse" id="app-navbar-collapse">
            @if(Auth::check() )
                <!-- Left Side Of Navbar -->
                <!-- <ul class="nav navbar-nav"> -->
                   <a href="{{ url('/users/products') }}" class="navbar-brand"> {{ Auth::user()->name }}さんのマイページ</a>
                <!-- </ul> -->
            @endif

<!-- header内のパン屑情報 -->

            @if(isset($title))
            <a class="navbar-brand" href="/users/products/{{ $title->id }}" title="">
            {{ $title->title }}</a>
            @endif

            @if(isset($nav_scene))
            <a class="navbar-brand" href="/users/products/scenes/{{ $nav_scene->id }}" title="">
            SCENE: {{ $nav_scene->scene_number }}
            </a>
            @endif

            @if(isset($nav_cut))
            <a class="navbar-brand" href="/users/products/scenes/cuts/{{ $nav_cut->id }}" title="">
            CUT: {{ $nav_cut->cut_number }}
            </a>
            @endif

<!-- header内のshare機能時のパン屑 -->

            @if(isset($dtlProduct) && !Auth::user() )
            <a class="navbar-brand" href="/users/share/{{ $dtlProduct->user_id }}" title="">
            {{ $dtlProduct->user->name }}さんの作品一覧
            </a>
            @endif


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">ログイン</a></li>
                        <li><a href="{{ url('/register') }}">新規登録</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/users/share/{{ Auth::user()->id }}">
                                        <i class="fa fa-btn glyphicon glyphicon-share"></i>
                                        作品公開ページ
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}">
                                        <i class="fa fa-btn glyphicon glyphicon-log-out"></i>
                                        ログアウト
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>

    <div class="ue">
        <img src="/assets/images/filmline.png" class="film-image">
    </div>
</div>
<div class="container mannaka">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
    @yield('content')
        </div>
    </div>
</div>
  <div class="shita">
    <img src="/assets/images/filmline.png" class="film-image">
  </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
