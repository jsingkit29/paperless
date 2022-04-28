<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CHEDRO-III Paperless System</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/css/images/ched_logo.png')}}"/>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/provider/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/provider/plugins/iCheck/square/blue.css')}}">


    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="{{asset('/css/ladda/ladda-themeless.min.css')}}">
    <link rel="stylesheet" href="{{asset('/js/sweetalert2/dist/sweetalert2.min.css')}}">

</head>
<body class="hold-transition login-page" style="background-color:#0038a9;">
<div class="login-box">
{{--    <div class="login-logo">--}}
{{--    <span class="logo-lg">--}}
{{--            <img src="{{$templatePlugin->rootLocation()}}/css/images/ched_logo.png" width="100px" height="100px"/></span><br>--}}
{{--        <a href="/"><b class="text-danger">PAPERLESS </b>SYSTEM</a>--}}
{{--    </div>--}}
    <!-- /.login-logo -->
    <div class="login-box-body">
        <div class="login-logo">
    <span class="logo-lg">
            <img src="{{$templatePlugin->rootLocation()}}/css/images/ched_logo.png" width="100px" height="100px"/></span><br>
            <a href="/"><b class="text-danger">PAPERLESS </b>SYSTEM</a>
        </div>
        <h6 class="text-center" style="font-size:24px"><span class="text-danger"><b>Commission on Higher Education </b></span><br>Central Luzon RO-III</h6>
        <div class="social">
           {{-- <img src="{{asset('/css/images/open_hearts_logo.jpg"
                 alt="open" width="100%">--}}
                <h4>
            <p class="login-box-msg"> Submission Portal</p>
                </h4>
            <form id="form_login" class="form-horizontal" action="#" method="post">
                {{csrf_field()}}
                <div class="form-group has-feedback">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                    {{--<input type="text" id="username" name="username" class="form-control" placeholder="Username">--}}
                    {{-- <span class="glyphicon glyphicon-user form-control-feedback"></span>--}}
                </div>
                <div class="form-group has-feedback">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    {{-- <span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary form-control" data-style="expand-right" data-spinner-size="20">
                            <span class="ladda-label">Log in <i class="glyphicon glyphicon glyphicon-chevron-right position-right"></i></span>
                        </button>
                    </div>
                </div>
            </form>



        </div>
        <!-- /.login-box-body -->
    </div>

    <!-- jQuery 3 -->
    <script src="{{asset('/provider/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('/provider/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('/provider/plugins/iCheck/icheck.min.js')}}"></script>


    <script src="{{asset('/js/jsvalidation/jquery.validate.js')}}"></script>
    <script src="{{asset('/js/modules/users/form/login_validation.js')}}"></script>
    <script src="{{asset('/js/modules/users/main/login.js')}}"></script>
    <script src="{{asset('/js/modules/users/main/event_login.js')}}"></script>

    <script src="{{asset('/js/ladda/spin.min.js')}}"></script>
    <script src="{{asset('/js/ladda/ladda.min.js')}}"></script>
    <script src="{{asset('/js/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('/js/notify/snotify.js')}}"></script>

</body>
</html>