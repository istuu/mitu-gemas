<section class="bg-style1" id="winner">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-12 wow fadeIn">
                    <h2 class="text-pink text-center text-uppercase">Informasi Pemenang</h2>

                </div>
            </div>

            <div class="row">
            <div class="col-md-12 mt-4 wow fadeIn">
            <div class="table-responsive-sm">
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
                    @php
                        if(isset(request()->page)){
                            $i = request()->page*10-9;
                        }else{
                            $i = 1;
                        }
                    @endphp
                    @foreach($tables as $row)
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
              </div>
              {!! $tables->fragment('winner')->links() !!}
              </div>
            </div>
        </div>
    </div>
</section>
