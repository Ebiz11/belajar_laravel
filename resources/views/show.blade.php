<a href="{{ url('add') }}">Tambah</a>
<br><br>
  <table border="1" cellspacing="0" width = "400" height="100">
    <tr>
      <th>Nama Buah</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th>Aksi</th>
    </tr>

    @foreach ($datas as $data)
    <tr>
      <td>{{ $data->nama_buah }}</td>
      <td>{{ $data->harga }}</td>
      <td>{{ $data->jumlah }}</td>
      <td>Edit | Hapus</td>
    </tr>
    @endforeach

  </table>
