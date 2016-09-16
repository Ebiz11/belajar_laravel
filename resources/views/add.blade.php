<form action="{{ url('store') }}" method="post">
  {!! csrf_field() !!}
  <table>
    <tr>
      <td>Nama Buah</td>
      <td>:</td>
      <td><input type="text" name="nama_buah"></td>
    </tr>

    <tr>
      <td>Harga</td>
      <td>:</td>
      <td><input type="text" name="harga"></td>
    </tr>

    <tr>
      <td>Nama Buah</td>
      <td>:</td>
      <td><input type="text" name="jumlah"></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td><input type="submit" name="submit" value="simpan"></td>
    </tr>
  </table>
</form>
