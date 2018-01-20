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
