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
    <br/>
    <table class="table table-responsive table-striped table-bordered" id="datatable">
        <thead>
            <tr>
                <td>Submitted At</td>
                <td>Name</td>
                <td>Email</td>
                <!-- <td>Phone</td>
                <td>Gender</td>
                <td>Unique Code</td>
                <td>Prize</td>
                <td>Status</td>
                <td>Action</td> -->
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@push('view-style')
{{ HTML::style(URL::asset('vendor/webarq/admin-lte/plugins/datatables/dataTables.bootstrap.css')) }}
{{ HTML::style('https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css') }}
@endpush
@push('view-script')
{{ HTML::script(URL::asset('vendor/webarq/admin-lte/plugins/datatables/jquery.dataTables.min.js')) }}
{{ HTML::script(URL::asset('vendor/webarq/admin-lte/plugins/datatables/dataTables.bootstrap.min.js')) }}
{{ HTML::script('https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js') }}
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js') }}
{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js') }}
{{ HTML::script('https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js') }}
<script>
    var start = "{{ request()->start }}";
    var end   = "{{ request()->end }}";
    $(document).ready(function() {
        var table = $('#datatable').DataTable( {
                        "processing": true,
                        "serverSide": true,
                        "ajax": "{{ url()->current() }}/data?start="+start+"&end="+end,
                        "dom": 'Bfrtip',
                        "buttons": [
                           'copyHtml5',
                           'excelHtml5',
                           'csvHtml5',
                           'pdfHtml5'
                        ],
                        columns: [
                            { data: 'create_on', name: 'create_on' },
                            { data: 'name', name: 'name' },
                            { data: 'email', name: 'email' },
                            // { data: 'action', name: 'action', searchable:false },
                          ]
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
@endpush
