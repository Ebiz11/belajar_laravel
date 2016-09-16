<form action="{{ url('update', $tampiledit->id) }}" method="post">
  {!! csrf_field() !!}
  <table>
    <tr>
      <td>Nama Buah</td>
      <td>:</td>
      <td><input type="text" name="nama_buah" value="{{ $tampiledit->nama_buah }}"></td>
    </tr>

    <tr>
      <td>Harga</td>
      <td>:</td>
      <td><input type="text" name="harga" value="{{ $tampiledit->harga }}"></td>
    </tr>

    <tr>
      <td>Nama Buah</td>
      <td>:</td>
      <td><input type="text" name="jumlah" value="{{ $tampiledit->jumlah }}"></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td><input type="submit" name="submit" value="simpan"></td>
    </tr>
  </table>
</form>
