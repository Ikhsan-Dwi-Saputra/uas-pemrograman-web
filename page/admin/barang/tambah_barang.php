<div class="box-title">
    <h1>Tambah Barang Jualan</h1>
</div>
<div id="box2">
  <form name="add" method="post" action="?page=tambah_barangpro" enctype="multipart/form-data">

    <table class="news">

      <tr>
        <td>Gambar</td>
        <td>
          <input type="file" name="gambar" required>
        </td>
      </tr>

      <tr>
        <td>Nama Barang</td>
        <td>
          <input type="text" name="deskripsi" size="50" placeholder="masukkan nama laptop" required>
        </td>
      </tr>

      <tr>
        <td>Harga</td>
        <td>
          <input type="text" name="harga" size="50" placeholder="Rp." required>
        </td>
      </tr>

      <tr>
        <td>Stok Barang</td>
        <td>
          <input type="text" name="stok" size="50" placeholder="masukkan stok barang" required>
        </td>
      </tr>

      <tr>
        <td></td>
        <td>
          <input class="tombol-hijau" type="submit" name="add" value="Tambah & Simpan">
          <a class="tombol-merah" href="?page=barang">Tutup</a>
        </td>
      </tr>
    </table>

  </form>
 


</div>
