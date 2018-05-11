@extends('layouts.app')
@section('title','Inscription')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inscription</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('layouts/login/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('layouts/app/font-awesome/css/font-awesome.min.4.5.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('layouts/app/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('layouts/login/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('layouts/login/plugins/iCheck/square/blue.css')}}">
  <link rel="stylesheet" href="{{asset('layouts/app/css/bootstrap.min.swatch.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Inscription</b>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            <input id="name" type="text" class="form-control" placeholder="name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            

                        </div>
                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} has-feedback">
                            <span class="fa fa-phone-square form-control-feedback"></span>
                                <input id="phone" type="text" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                        <div class="form-group has-feedback">
                            
                                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                <input id="password-confirm" type="password" class="form-control" placeholder="password-confirm" name="password_confirmation" required>
                            
                        </div>
     
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck container">
            <label>
              <input type="checkbox" required> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('layouts/login/plugins/jQuery/jquery-2.2.3.min.jss')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('layouts/login/bootstrap/js/bootstrap.min.jss')}}"></script>
<!-- iCheck -->
<script src="{{asset('layouts/login/plugins/iCheck/icheck.min.jss')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

@endsection
