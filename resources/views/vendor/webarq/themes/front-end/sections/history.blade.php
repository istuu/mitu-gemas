<!-- Modal -->
<div id="popupHistory" class="modal fade" role="dialog" style="color:#495057">
  <div class="modal-dialog modal-lg">

    <form id="formHistory">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" style="margin-left:2000">&times;</button> -->
            <h4 class="modal-title">History Penukaran Poin</h4>
          </div>
          <div class="modal-body" id="popupHistoryBody">
              <div class="form-row">
                  <div class="form-group col-md-12">
                      <label for="exampleFormControlInput1">Masukan Alamat Email Anda</label>
                      <input type="email" class="form-control" placeholder="Alamat Email" name="email-history" required>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" id="historyCancel" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary" id="historySubmit">Submit</button>
          </div>
        </div>

    </form>

  </div>
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
                $("#popupHistoryBody").html(result);
                $("#historyCancel").text('Close');
                $("#historySubmit").hide();
            }
        });
    });
</script>
@endpush
