<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AutoMyBid | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('css/AdminLTE.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{URL::asset('plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <b><img src="{{URL::asset('img/logo-black.svg')}}"></b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"></p>
            @include('admin.includes.status-msg')
    <form action="{{ url('dealer/login') }}" method="post">
            {!! csrf_field() !!}
            <h3> Login</h3>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <div class="col-md-6">
            <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_CLIENT_KEY')}}"></div>
            @if ($errors->has('g-recaptcha-response'))
            <span class="help-block">
                <strong>Captcha required</strong>
            </span>
            @endif
            </div>
        </div>
      </br>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           {{-- <label>
              <input type="checkbox" name ="remember"> Remember Me
            </label>--}}
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" value="Sign In"/>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div class="row">
         <div class="col-xs-12">
              <a href="{{ url('admin/login') }}"><b>Click here to login as Admin</b></a>
         </div>
    </div>

    <!--<div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->
<hr/>
<!--<a href="#">I forgot my password</a><br>-->
    <!--<a href="register.html" class="text-center">Register a new membership</a>-->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="{{URL::asset('plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{URL::asset('plugins/iCheck/icheck.min.js')}}"></script>
<script src="https://www.google.com/recaptcha/api.js?hl=en" async defer></script>
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
