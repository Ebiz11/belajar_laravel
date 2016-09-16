@extends('layouts.index')
@section('content')

<a href="{{ url('add') }}">Tambah</a>
<br><br>
  <table border="1" cellspacing="0" width = "400" height="100">
    <tr>
      <th>Nama Buah</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th>Detail</th>
      <th>Aksi</th>
    </tr>

    @foreach ($datas as $data)
    <tr>
      <td>{{ $data->nama_buah }}</td>
      <td>{{ $data->harga }}</td>
      <td>{{ $data->jumlah }}</td>
      <td><a href="{{ url('read', $data->id) }}">lihat</a></td>
      <td><a href="{{ url('edit', $data->id) }}">Edit</a> | <a href="{{ url('delete', $data->id) }}" onclick="return confirm('Yakin mau hapus data ini sob?')">Hapus</a></td>
    </tr>
    @endforeach

  </table><br><br>
{{ $datas->render() }}
@endsection
