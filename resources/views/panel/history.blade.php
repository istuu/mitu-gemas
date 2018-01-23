<div class="modal-dialog modal-lg">

  <form id="formHistory">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" style="margin-left:2000">&times;</button> -->
          <h4 class="modal-title">History Penukaran Poin</h4>
        </div>
        <div class="modal-body">
            @if(count($histories) > 0)
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Pemenang</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Hadiah</th>
                </tr>
              </thead>
              <tbody>
                  @php($i = 1)
                  @foreach($histories as $row)
                    <tr>
                      <th scope="row">{{ $i }}</th>
                      <td>{{ $row->name }}</td>
                      <td>{{ date('d F Y',strtotime($row->create_on)) }}</td>
                      <td>{{ $row->prize }}</td>
                    </tr>
                    @php($i++)
                  @endforeach
              </tbody>
            </table>
            @else
            <p>Data tidak ditemukan!</p>
            @endif
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="historyCancel" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="clearCache">Clear</button>
        </div>
      </div>

  </form>

</div>
