<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 1/17/2017
 * Time: 2:09 PM
 */ ?>
@extends('webarq::themes.admin-lte.layout.index')

@section('content')
    @if (!empty($modals))
        <div class="my-modal">
            @foreach ($modals as $type => $setting)
                <div id="{{$type}}Modal" class="modal{{ isset($setting['level']) ? ' modal-' . $setting['level'] : '' }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">{{ array_get($setting, 'title', 'Confirmation') }}</h4>
                            </div>
                            <div class="modal-body">
                                <p>{{ array_get($setting, 'message', '...') }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button"
                                        class="btn {{ array_get($setting, 'button', 'btn-default') }} pull-left"
                                        data-dismiss="modal">
                                    {{ array_get($setting, 'cancel', 'Cancel') }}</button>
                                <button type="button"
                                        class="btn continue {{ array_get($setting, 'button', 'btn-default') }}">
                                    {{ array_get($setting, 'continue', 'Continue') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection

@push('view-style')
{{-- Load DataTables style asset --}}
@if ($useDataTables)
    {{ HTML::style(URL::asset('vendor/webarq/admin-lte/plugins/datatables/dataTables.bootstrap.css')) }}
    <style type="text/css">
        a.header {
            padding-bottom: 20px;
        }
    </style>
@endif

{{-- Load tree grid style asset --}}
@if ($isTree)
    {{ HTML::style(URL::asset('vendor/webarq/tree-grid/css/style.css')) }}
@endif

{{-- Load additional styles --}}
@if (isset($styles) && [] !== $styles)
    @foreach ($styles as $key => $stylePath)
        {{ is_numeric($key) ? HTML::style($stylePath) : HTML::style($key, (array) $stylePath) }}
    @endforeach
@endif
{{-- Force the styles --}}
<style type="text/css">
    tbody tr.odd {
        background-color: #f4f4f4;
    }

    tbody tr.red {
        background-color: #f7b3ba;
    }

    tbody tr.green {

    }
</style>
@endpush

@push('view-script')
{{-- Load DataTables scripts asset --}}
@if ($useDataTables)
    {{ HTML::script(URL::asset('vendor/webarq/admin-lte/plugins/datatables/jquery.dataTables.min.js')) }}
    {{ HTML::script(URL::asset('vendor/webarq/admin-lte/plugins/datatables/dataTables.bootstrap.min.js')) }}

    @if ($isTree)
        <script type="text/javascript">
            $(function () {
                $('.table-listing').DataTable({
                    paging: false
                });
            });
        </script>
    @else
        @if(request()->segment(4) == 'exchange')
            <script type="text/javascript">
                $(function () {
                    $('.table-listing').DataTable({
                        "order": [[ 0, "desc" ]],
                    });

                    $("#start").datepicker({
                        dateFormat: 'yy-mm-dd',
                        autoclose: true,
                    });

                    $("#end").datepicker({
                        dateFormat: 'yy-mm-dd',
                        autoclose: true,
                    });

                    $('#start, #end').change( function() {
                        $('form').submit();
                    } );
                });
            </script>
        @else
            <script type="text/javascript">
                $(function () {
                    $('.table-listing').DataTable({
                        "order": [[ 0, "asc" ]],
                    });
                });
            </script>
        @endif
    @endif
@endif

{{-- Load tree grid script asset --}}
@if ($isTree)
    {{ HTML::script(URL::asset('vendor/webarq/tree-grid/script/script.js')) }}

    <script type="text/javascript">

        $(function () {
            function drawnTheTree() {
                var newBody = $('.table-listing tbody');
                var tableBody = newBody.clone();
                var treeId = 1;

                if (!tableBody.find('tr').length) {
                    return false;
                }

                function loadTrBranch(root, strClass, level) {
                    var trRoot = tableBody.find('tr[data-tree-root="' + root + '"]');

                    if (trRoot.length > 0) {
                        trRoot.each(function (idx) {
// Class odd or even
                            var oddEven = 0 === idx % 2 ? ' odd' : ' even';
// Remove previous even/odd class
                            $(this).removeClass('even odd').addClass(' treegrid-' + treeId + strClass + oddEven);
// Append the tr
                            newBody.append($(this));
// Increment id
                            treeId++;
// Load sub tr
                            loadTrBranch($(this).data('tree-branch'), ' treegrid-parent-' + (treeId - 1), level + 1);
                        });
                    }
                }

                newBody.html('');
                loadTrBranch(tableBody.find('tr').eq(0).data('tree-root'), '', 0);

                $('.table-listing').treegrid({
                    initialState: '{{ $isTree }}',
                    expanderExpandedClass: 'fa fa-minus-circle',
                    expanderCollapsedClass: 'fa fa-plus-circle'
                });
            }

            drawnTheTree();

            @if ($useDataTables)
                $('.table-listing').on('draw.dt', drawnTheTree);
            @endif


        });
    </script>
@endif

{{-- Load additional scripts --}}
@if (isset($scripts) && [] !== $scripts)
    @foreach ($scripts as $key => $stylePath)
        {{ is_numeric($key) ? HTML::script($stylePath) : HTML::script($key, (array) $stylePath) }}
    @endforeach
@endif
<script type="text/javascript">

    function centerizeModal() {
        var modal = $(this),
                dialog = modal.find('.modal-dialog');
        modal.css('display', 'block');

        // Dividing by two centers the modal exactly, but dividing by three
        // or four works better for larger screens.
        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
    }

    $(function () {
        // Reposition when a modal is shown
        $('.modal').on('show.bs.modal', centerizeModal);
        // Reposition when the window is resized

        $('td.action a').on('click', function (e) {
            if ($(this).is('[data-modal]')) {
// Preventing browser getting in to the destination url
                e.preventDefault();

                var myModal = $('.modal#' + $(this).data('modal') + 'Modal');
                var href = $(this).attr('href');

                myModal.find('.modal-footer .btn.continue').click(function () {
                    window.location.href = href;
                });

                myModal.modal('show');
            }
        });
    });

    $(window).on('resize', function () {
        $('.modal:visible').each(centerizeModal);
    });
</script>
@endpush
@push('view-style')
<link rel="stylesheet" href="{{ asset('vendor') }}/sweetalert/sweetalert.css">
<style type="text/css">
    tbody tr.odd {
        background-color: #f4f4f4;
    }
    tbody tr.red {
        background-color: #f7b3ba;
    }
    tbody tr.green {

    }
</style>
<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal-preview {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 100; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
.modal{
    padding-top: 20px; /* Location of the box */
}

/* Modal Content (image) */
.modal-image {
    margin: auto;
    display: block;
    width: 60%;
    max-width: 1000px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-image, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 50px;
    right: 20px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-image {
        width: 100%;
    }
}
</style>
@endpush
@push('view-script')
<script type="text/javascript" src="{{ asset('vendor') }}/sweetalert/sweetalert.min.js"></script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
<script>
    $("#btn-export").click(function(e){
        e.preventDefault();
        $.ajax( {
            type: "GET",
            url: $(this).attr('href')+'?start={{ request()->start }}&end={{ request()->end }}',
            cache: false,
            contentType: false,
            processData: false,
            timeout: 0,
            success: function( result ) {
                if (result !== 'failed') {
                    $("body").removeClass("loading");
                    swal({
                      title: 'Exported!',
                      text: "Your data has been successfully exported",
                      type:'success',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Download Data',
                      cancelButtonText: 'Close',
                      confirmButtonClass: 'btn btn-success',
                      cancelButtonClass: 'btn btn-danger',
                    }).then(function () {
                        window.location.href = result;
                    }, function (dismiss) {
                        location.reload();
                    });
                }else{
                    swal('Oops...','Something went wrong!','error')
                }
            }
        } );
    });

    function showModalStatus(id){
        $.ajax({
            type: "GET",
            url : "{{ url('admin-panel/exchange/exchange_codes/modal') }}",
            data: {
                id: id,
            },
            success: function(result){
                $("#modalStatus").html(result);
                $("#modalStatus").modal();
            }
        });
    }
</script>
@endpush
