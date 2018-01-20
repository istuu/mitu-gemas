<?php

/**
 * Created by PhpStorm
 * Date: 14/01/2017
 * Time: 14:45
 * Author: Daniel Simangunsong
 *
 * Calm seas, never make skill full sailors
 */ ?>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Please Login</title>
    <link rel="shortcut icon" type="images/x-icon" href="{{ asset(Wa::config('system.favicon')) }}"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/plugins/iCheck/square/blue.css')}}">
    <style type="text/css">
      .login-page, .register-page {
          background: #dddddd url("{{ asset(Wa::config('system.site.login.background')) }}");
          color: #ffffff !important;
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
      }
      .login-box, .register-box {
        margin: 2% auto;
      }
      .login-box-body {
        box-shadow: 0px 0px 50px rgba(0,0,0,0.8);
        background: rgba(255,255,255,0.9);
        color: #666666 !important;
      }
      html,body {
        overflow: hidden;
      }
  	  .login-box-body {
        box-shadow: 0px 0px 25px #999999;
      }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition login-page">
<div class="login-box">
    <div style="margin-top:50px" class="login-logo">
      <a>
          <img src="{{ asset(Wa::config('system.site.logo')) }}" style='max-width: 100%;max-height:170px'/>
      </a>
    </div><!-- /.login-logo -->

    <div style="margin-top:50px" class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        @if (isset($messages))
            @foreach ($messages as $groups)
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&#120;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    {{ current($groups) }}
                </div>
            @endforeach
        @endif
        {!!
        Form::open([
                'url' => isset($url) ? $url : URL::panel('system/admins/auth/login'),
                'class' => 'form-horizontal form-label-left']) !!}
        <div class='col-xs-12'>
            <div class="form-group has-feedback{{ isset($messages['username']) ? ' bad' : '' }}">
                <input autocomplete='off'  type="text" class="form-control" name='username' required placeholder="Username/Email"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
        </div>
        <div class='col-xs-12'>
            <div style="margin-bottom:25px"  class="form-group has-feedback{{ isset($messages['password']) ? ' bad' : '' }}">
                <input autocomplete='off' type="password" name="password" class="form-control" required placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
        </div>

        <div style="margin-bottom:25px" class="row">
            {{--<div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                </div>
            </div>--}}
            <!-- /.col -->
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat"><i class='fa fa-lock'></i> Sign In</button>
            </div>
            <!-- /.col -->
        </div>
        {!! Form::close() !!}
    </div>
</div>

<!-- jQuery 2.2.3 -->
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('vendor/webarq/admin-lte/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
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
