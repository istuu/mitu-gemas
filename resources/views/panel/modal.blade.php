<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">{{ $model->vouchers->unique_code }}</h4>
    </div>
    <form action="{{ url('admin-panel/exchange/exchange_codes/comment') }}" method="POST">
    {!! csrf_field() !!}
    <input value="{{ $model->id }}" name="id" hidden>
    <div class="modal-body">
        @if($model->vouchers->type == 'pulsa')
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlInput1">Status</label>
                    @if($model->status == 'valid')
                        <label class="label label-success">Terkirim</label>
                    @endif
                    <a class="btn btn-info btn-sm pull-right"><span class="fa fa-paper-plane"></span> Kirim ulang pulsa </a>
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleFormControlInput1">Komentar</label>
                    <textarea class="form-control" name="comment">{{ $model->comment }}</textarea>
                </div>
            </div>
        @else
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlInput1">Status</label>
                    <div class="radio">
                        <label for="radios-0">
                          <input type="radio" name="status" value="pending" {{ $model->status == 'pending' ? 'checked':null }}>
                          Menunggu Konfirmasi
                        </label>
                	</div>
                    <div class="radio">
                        <label for="radios-0">
                          <input type="radio" name="status" value="confirm" {{ $model->status == 'confirm' ? 'checked':null }}>
                          Sudah dihubungi, menunggu submit data dan sticker
                        </label>
                	</div>
                    <div class="radio">
                        <label for="radios-0">
                          <input type="radio" name="status" value="sent_data" {{ $model->status == 'sent_data' ? 'checked':null }}>
                          Data & Sticker diterima
                        </label>
                	</div>
                    <div class="radio">
                        <label for="radios-0">
                          <input type="radio" name="status" value="verified" {{ $model->status == 'verified' ? 'checked':null }}>
                          Data & Sticker terverifikasi
                        </label>
                	</div>
                    <div class="radio">
                        <label for="radios-0">
                          <input type="radio" name="status" value="certified_sent" {{ $model->status == 'certified_sent' ? 'checked':null }}>
                          Sertifikat dikirim
                        </label>
                	</div>
                    <div class="radio">
                        <label for="radios-0">
                          <input type="radio" name="status" value="certified_receive" {{ $model->status == 'certified_receive' ? 'checked':null }}>
                          Sertifikat diterima
                        </label>
                	</div>
                    <div class="radio">
                        <label for="radios-0">
                          <input type="radio" name="status" value="valid" {{ $model->status == 'valid' ? 'checked':null }}>
                          Selesai
                        </label>
                	</div>
                    <div class="radio">
                        <label for="radios-0">
                          <input type="radio" name="status" value="canceled" {{ $model->status == 'cancelled' ? 'checked':null }}>
                          Dibatalkan
                        </label>
                	</div>
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleFormControlInput1">Komentar</label>
                    <textarea class="form-control" name="comment">{{ $model->comment }}</textarea>
                </div>
            </div>
        @endif
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
    
    </form>
  </div>

</div>
