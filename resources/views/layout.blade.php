<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>CHEDRO-III Appointment System</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/css/images/ched_logo.png')}}"/>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/provider/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/provider/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('/provider/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/select2/dist/css/select2.min.css')}}">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('/provider/plugins/iCheck/all.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('/provider/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">

    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('/provider/plugins/timepicker/bootstrap-timepicker.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



    @yield('css')

</head>
<body class="hold-transition skin-red sidebar-mini">
{{-- @if(auth()->user()->user_group_id == 1)
    <body class="hold-transition skin-red sidebar-mini">
    @endif --}}
{{-- @if(auth()->user()->user_group_id == 2)
    <body class="hold-transition skin-blue sidebar-mini">
    @endif --}}
<div class="wrapper">
    @include('layout.nav')
    @include('layout.sidenav')
    <div class="content-wrapper">
        @yield('content')
    </div>
    {{--@yield('contentwrapper')
    @yield('controlsidebar')--}}
    @include('layout.footer')
</div>

<!-- jQuery 3 -->
<script src="{{asset('/provider/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/provider/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('/provider/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('/provider/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('/provider/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('/provider/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('/provider/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('/provider/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/provider/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('/provider/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('/provider/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('/provider/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('/provider/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('/provider/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/provider/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/provider/dist/js/adminlte.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('/provider/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('/provider/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('/provider/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('/provider/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

<script src="{{asset('/provider/plugins/iCheck/icheck.min.js')}}"></script>

<!-- bootstrap color picker -->
<script src="{{asset('/provider/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>

<!-- bootstrap time picker -->
<script src="{{asset('/provider/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>

{{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/provider/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/provider/dist/js/demo.js')}}"></script>--}}

@yield('javascript')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>
