<div class="col-md-12">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Title & Video</a></li>
      <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Step</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab_1">
          @include('panel.promo.title')
      </div>
      <div class="tab-pane" id="tab_2">

      </div>
    </div>
  </div>
</div>
@push('view-style')
<link rel="stylesheet" href="{{ asset('vendor/webarq/admin-lte/plugins/datatables/dataTables.bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('vendor') }}/sweetalert/sweetalert.css">
@endpush
@push('view-script')
<script type="text/javascript" src="{{ asset('vendor') }}/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/webarq/admin-lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/webarq/admin-lte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="//cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>
<script src="{{ URL::asset('vendor/webarq/default/js/ckeditor.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#data_table').DataTable({
            "order": [[ 4, "asc" ]]
        });
        $('#data_table_interest').DataTable({
            "order": [[ 4, "asc" ]]
        });
        $('#form-highlight').hide();
        $('#form-interest').hide();

        $('#btn-add').click(function() {
            $('#form-highlight').show();
            $(this).hide();
        });
        $('#btn-add-interest').click(function() {
            $('#form-interest').show();
            $(this).hide();
        });
        btnCancelClick();
    });

    function updateData(id){
        $.ajax({
            type: "POST",
            url : '{{ url("admin-cp/".request()->segment(2)."/".request()->segment(3)."/edit") }}',
            data: {
                id: id,
                _token: "{{ csrf_token() }}"
            },
            success: function(result){
                $("#form-highlight").html(result);
                $('#form-highlight').show();
                $('#btn-add').hide();
                btnCancelClick();
            }
        });
    }

    function updateData2(id){
        $.ajax({
            type: "POST",
            url : '{{ url("admin-cp/".request()->segment(2)."/".request()->segment(3)."/edit2") }}',
            data: {
                id: id,
                _token: "{{ csrf_token() }}"
            },
            success: function(result){
                $("#form-interest").html(result);
                $('#form-interest').show();
                $('#btn-add-interest').hide();
                btnCancelClick();
            }
        });
    }

    function btnCancelClick(){
        $('#btn-cancel').click(function() {
            $('#form-highlight').hide();
            $('#btn-add').show();
        });
        $('#btn-cancel-interest').click(function() {
            $('#form-interest').hide();
            $('#btn-add-interest').show();
        });
    }

    function deleteDataHighlight(id)
    {
        swal({
          title: 'Delete!',
          text: "Are you sure to delete this data?",
          type: 'warning',
          showCancelButton: true,
        }).then(function () {
            $.ajax({
                type : 'get',
                url : '{{ url("admin-cp/".request()->segment(2)."/".request()->segment(3)."/delete/highlight") }}',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                success : function(data){
                    swal({
                        title:'Deleted!',
                        text:'Your file has been deleted.',
                        type:'success'
                    }).then(function () {
                        location.reload();
                    })
                },
            });
        });
    }

    function deleteDataInterest(id)
    {
        swal({
          title: 'Delete!',
          text: "Are you sure to delete this data?",
          type: 'warning',
          showCancelButton: true,
        }).then(function () {
            $.ajax({
                type : 'get',
                url : '{{ url("admin-cp/".request()->segment(2)."/".request()->segment(3)."/delete/interest") }}',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                success : function(data){
                    swal({
                        title:'Deleted!',
                        text:'Your file has been deleted.',
                        type:'success'
                    }).then(function () {
                        location.reload();
                    })
                },
            });
        });
    }
</script>
<script>
  document.getElementById("image").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image-preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
  };
  document.getElementById("image2").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image2-preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
  };
</script>
@endpush
