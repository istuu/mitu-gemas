<!-- Modal -->
<div id="popup" class="modal fade" role="dialog" style="color:#495057">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" style="margin-left:2000">&times;</button> -->
        <h4 class="modal-title">{{ $popup->title }}</h4>
      </div>
      <div class="modal-body">
          <img src="{{ asset($popup->image) }}" width="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
