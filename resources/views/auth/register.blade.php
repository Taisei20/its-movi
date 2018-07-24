@extends('layouts.app')

@section('content')

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

 <style>
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

        /* SNSボタン */
        .btn-social {
          color: white;
        }
        /* Facebook */
        .btn-fb {
          background-color: #3B5998;
        }
        /* Twitter */
        .btn-tw {
          background-color: #00aced;
        }
        /* Google */
        .btn-gplus {
          background-color: #dd4b39;
        }
 </style>

<div id="login-overlay" class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">新規登録</h4>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-xs-6">
          <div class="well">
            <form id="registerForm" role="form" method="POST" action="{{ url('/register') }}" novalidate="novalidate">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="control-label">ユーザー名</label>
                <input type="name" class="form-control" name="name" value="{{ old('name') }}">
                  @if ($errors->has('name'))
                    <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">Eメールアドレス</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label">パスワード</label>
                <input id="password" type="password" class="form-control" name="password">
                  @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password-confirm" class="control-label">確認用パスワード</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                  @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-default btn-block">登録</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-xs-6">
          <p class="lead">SNSで新規登録</p>
          <ul class="list-unstyled" style="line-height: 2">
            <!--リンクなしボタン-->
            <button type="button" class="btn btn-social btn-fb btn-block"><i class="fa fa-facebook left"></i> Facebook</button>
            <button type="button" class="btn btn-social btn-tw btn-block"><i class="fa fa-twitter left"></i> Twitter</button>
            <button type="button" class="btn btn-social btn-gplus btn-block"><i class="fa fa-google-plus left"></i> Google +</button>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
