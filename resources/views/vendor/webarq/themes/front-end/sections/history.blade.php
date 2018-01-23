<!-- Modal -->
<div id="popupHistory" class="modal fade" role="dialog" style="color:#495057">
    @include('vendor.webarq.themes.front-end.common.modal-default')
</div>
@push('view-script')
<script>
    $('#formHistory').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url : '{{ url()->current() }}',
            data: {
                email: $("input[name='email-history']").val(),
                type: 'history',
                _token: "{{ csrf_token() }}"
            },
            success: function(result){
                $("#popupHistory").html(result);
                // $("#historyCancel").text('Close');
                // $("#historySubmit").hide();
            }
        });
    });
</script>
@endpush
