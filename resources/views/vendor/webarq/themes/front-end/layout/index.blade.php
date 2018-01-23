<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('meta-title', $metaTitle )</title>
        <meta name="description" content="@yield('meta-description', $metaDescription )" />
        <link rel="shortcut icon" type="images/x-icon" href="{{ URL::asset(Wa::config('system.favicon')) }}"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
        <!--icons-->
        <link rel="stylesheet" href="{{ asset('vendor') }}/ionicons/css/ionicons.min.css" />
        <link rel="stylesheet" href="{{ asset('vendor') }}/sweetalert/sweetalert.css">

        @stack('view-style')

        <!-- Enable/Disabled browser system cache -->
        @if (1 === (int) Wa::config('system.site.cache'))
            <meta http-equiv="cache-control" content="max-age=0"/>
            <meta http-equiv="cache-control" content="no-cache"/>
            <meta http-equiv="expires" content="0"/>
            <meta http-equiv="expires" content="{{ date('D, d M Y H:i:s e') }}"/>
            <meta http-equiv="pragma" content="no-cache"/>
        @endif

        <!--fonts-->
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-87253298-3');
        </script>
    </head>
    <body>
        <!--hero section-->
        <section class="hero p-0">
            <div class="container-fluid">
                <div class="row">
                    {!! Wa::getThemesView($shareThemes, 'common.header') !!}

                    <div class="col-sm-9 ml-auto px-0">
                        @yield('content')
                        {!! Wa::getThemesView($shareThemes, 'common.footer') !!}
                    </div>

                </div>
            </div>
        </section>
        @include('vendor.webarq.themes.front-end.common.popup')

        <script src="{{ asset('frontend') }}/js/jquery-3.1.1.min.js"></script>
        <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
        <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('frontend') }}/js/jquery.easing.min.js"></script>
        <script src="{{ asset('frontend') }}/js/wow.js"></script>
        <script src="{{ asset('frontend') }}/js/scripts.js"></script>
        <script type="text/javascript" src="{{ asset('vendor') }}/sweetalert/sweetalert.min.js"></script>
        @if($popup->is_active == 1)
        <script>
            $(document).ready(function(){
                $("#popup").modal();
            });
        </script>
        @endif
        @if(session('success'))
    		<script>
    			$(document).ready(function(){
					swal({
                        title : "{{session('success')->title }}",
                        html : "{!! session('success')->description !!}",
                        type : "success",
                    });
    			});
    		</script>
        @endif
        @if(session('error'))
    		<script>
    			$(document).ready(function(){
                    swal({
                        title : "{{session('error')->title }}",
                        html : "{!! session('error')->description !!}",
                        type : "error",
                    });
    			});
    		</script>
        @endif
        @if(session('info'))
    		<script>
                swal({
                    title : "Error",
                    html : "{!! session('info')->description !!}",
                    type : "error",
                });
    		</script>
        @endif
        @stack('view-script')
    </body>
</html>
