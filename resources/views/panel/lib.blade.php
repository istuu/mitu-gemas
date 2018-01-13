<html>
    <head>
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

        <link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('vendor/webarq/admin-lte/plugins/elfinder/css/elfinder.min.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ url('vendor/webarq/admin-lte/plugins/elfinder/css/elfinder_bootstrap.css') }}">

        <!-- <link rel="stylesheet" type="text/css" media="screen" href="{{ url('vendor/webarq/admin-lte/plugins/elfinder/themes/windows-10/css/theme.css') }}"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script src="{{URL::asset('vendor/webarq/admin-lte/plugins/elfinder/js/elfinder.min.js')}}"></script>
    </head>

    <body>
        <div id = 'elfinder'>

        </div>
    </body>
    <script type="text/javascript" charset="utf-8">
    var validation_upload = "<?php echo sha1(date('Y-m-d').env('APP_SALT'))?>";
      $().ready(function() {
            function getUrlParam(paramName) {
                var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
                var match = window.location.search.match(reParam) ;

                return (match && match.length > 1) ? match[1] : '' ;
            }

            $(document).ready(function(){
                 // star elfinder image

                    var urlImage = '{{URL::asset("vendor/webarq/admin-lte/plugins/elfinder/php/connector.minimal.php")}}';
                    var funcNum = getUrlParam('CKEditorFuncNum');
                    $('#elfinder').elfinder({
                         url :  urlImage + '?token='+validation_upload ,
                         uiOptions : {
                            // toolbar configuration
                            toolbar : [
                                ['back', 'forward'],
                                ['reload'],
                                ['home', 'up'],
                                ['mkdir', 'mkfile', 'upload'],
                                ['open', 'download', 'getfile'],
                                ['info'],
                                ['quicklook'],
                                ['copy', 'cut', 'paste'],
                                ['rm'],
                                ['duplicate', 'rename', 'edit', 'resize'],
                                ['extract', 'archive'],
                                ['view'],
                                ['help']
                            ],

                            // directories tree options
                            tree : {
                                // expand current root on init
                                openRootOnLoad : true,
                                // auto load current dir parents
                                syncTree : true
                            },

                            // navbar options
                            navbar : {
                                minWidth : 150,
                                maxWidth : 500
                            },

                            // current working directory options
                            cwd : {
                                // display parent directory in listing as ".."
                                oldSchool : false
                            }
                        },
                         contextmenu : {
                           files  : ['getfile', '|','open', '|', 'copy', 'cut', 'paste', 'duplicate', '|',
                        'rm', '|', 'edit', 'rename', '|'],
                           navbar : [],
                         },
                         onlyMimes : ['image',
                                      'application/pdf',
                                      'video/mp4',
                                      'application/msword',
                                      'application/vnd.ms-excel',
                                      'application/vnd.ms-powerpoint',
                                      'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                      'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                      'application/vnd.ms-powerpoint'
                                      ],
                         resizable : false ,
                         getFileCallback : function(file) {
                            window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                             window.close();

                        },

                    }).elfinder('instance');;

                    //
            });
      });
  </script>
</html>
