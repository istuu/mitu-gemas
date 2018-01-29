<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 1/17/2017
 * Time: 2:08 PM
 */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ strip_tags(Wa::config('system.cms.title', config('webarq.projectInfo.name', 'my Dashboard'))) }}</title>
    @yield('meta')
    <link rel="shortcut icon" type="images/x-icon" href="{{ URL::asset(Wa::config('system.favicon')) }}"/>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->

    @if ('locale' === getenv('APP_ENV'))
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/dev-only/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/dev-only/ionicons.min.css')}}">
    @else
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        @endif
                <!-- Theme style -->
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/dist/css/AdminLTE.min.css')}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/dist/css/skins/_all-skins.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/plugins/iCheck/flat/blue.css')}}">
        <!-- Morris chart -->
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/plugins/morris/morris.css')}}">
        <!-- jvectormap -->
        <link rel="stylesheet"
              href="{{URL::asset('vendor/webarq/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{URL::asset('vendor/webarq/admin-lte/plugins/datepicker/datepicker3.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet"
              href="{{URL::asset('vendor/webarq/admin-lte/plugins/daterangepicker/daterangepicker.css')}}">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet"
              href="{{URL::asset('vendor/webarq/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
        <!-- select2 -->
        <link rel="stylesheet"
              href="{{URL::asset('vendor/select2/select2.min.css')}}">

        <link rel="stylesheet" href="{{URL::asset('css/loader.css')}}">
        @stack('view-style')

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body class="hold-transition {{ strip_tags(Wa::config('system.cms.theme', 'skin-blue')) }} sidebar-mini">
<div class="wrapper">
    {!! Wa::getThemesView('admin-lte', 'common.header') !!}
            <!-- Left side column. contains the logo and sidebar -->
    {!! Wa::getThemesView('admin-lte', 'common.sidebar')->render() !!}
            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {!! Wa::getThemesView('admin-lte', 'common.breadcrumb') !!}

                <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            @yield('image_preview')
                        </div>
                        <div class="box-body">
                            <div class="col-md-12">
                                <div id="alert">
                                    @if (isset($alerts) && [] !== $alerts)
                                        <div class="alert alert-{{array_get($alerts, 1, 'warning')}}">
                                            <h4>
                                                <i class="icon fa fa-warning"></i>
                                                {{title_case(array_get($alerts, 1, 'warning'))}}!
                                            </h4>
                                            @set(localMessages, array_get($alerts, 0, []))
                                            @if (is_array($localMessages))
                                                <ul style="padding-left: 20px;">
                                                    @foreach ($localMessages as $tmpMessage)
                                                        <li>{{ $tmpMessage }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                {{ $localMessages }}
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if(request()->segment(4) == 'exchange')
                                <form method="get" action="">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="day">Date Start</label>
                                            <input type="text" name="start" value="{{ request()->start }}" class="form-control pull-right" id="start">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="day">Date End</label>
                                            <input type="text" name="end" value="{{ request()->end }}" class="form-control pull-right" id="end">
                                        </div>
                                    </div>
                                <form>
                                <div class="col-md-12">
                                    &nbsp
                                </div>
                            @endif
                            <div class="col-md-12">
                                @if (isset($rightSection))
                                    {!! $rightSection !!}
                                @endif

                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    @include('vendor.webarq.themes.admin-lte.common.modal')
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">

        </div>
        {!! Wa::config('system.site.copyright') !!}
    </footer>

    <!-- Control Sidebar -->
    {{--{!! Wa::getThemesView('admin-lte', 'common.control-sidebar') !!}--}}
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<div class="loader"><!-- Place at bottom of page --></div>

<!-- jQuery 2.2.3 -->
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('vendor/webarq/admin-lte/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('vendor/webarq/admin-lte/dist/js/app.min.js')}}"></script>
<!-- select2 -->
<script src="{{URL::asset('vendor/select2/select2.min.js')}}"></script>
{{-- AdminLTE dashboard demo (This is only for demo purposes) --}}
{{--<script src="{{URL::asset('vendor/webarq/admin-lte/dist/js/pages/dashboard.js')}}"></script>--}}
{{-- AdminLTE for demo purposes --}}
{{--<script src="{{URL::asset('vendor/webarq/admin-lte/dist/js/demo.js')}}"></script>--}}
<script type="text/javascript">
    var baseUrl = '{{ URL::panel('') }}';
    $body = $("body");
    $(document).on({
        ajaxStart: function() { $body.addClass("loading");    },
        ajaxStop: function() { $body.removeClass("loading"); }
    });

    $('select').select2({
        theme: "classic"
    });
</script>
@stack('view-script')
</body>
</html>
