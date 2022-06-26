<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div id="box">


<?php
  include "lib/koneksi.php";

    $user = $_SESSION['username'];
    $ambiluser = $conn->prepare("SELECT * FROM tbl_users WHERE username =:user");
    $ambiluser->bindparam(':user', $user);
    $ambiluser->execute();
    $data = $ambiluser->fetch(PDO::FETCH_OBJ);

    $id = $_GET['id'];
    $sisa = $_GET['st'];
    $result = $conn->prepare("SELECT * FROM tbl_barang WHERE id_barang =:id");
    $result->bindparam(':id', $id);
    $result->execute();
    $row=$result->fetch(PDO::FETCH_OBJ);
 ?>

<h1>Detail Produk</h1>

<form name="belanja" method="post" action="?page=belanja_detailpro" enctype="multipart/form-data">

  <table class="article" id="yia"style="background-color:  rgba(182, 179, 179, 0.392)">
    <tr>
      <td>
        <input type="hidden" name="id_user" value="<?php echo $data->id_user ?>">
        <input type="hidden" name="id_barang" value="<?php echo $row->id_barang ?>">
        <img src="img/laptop/<?php echo $row->nama_image ?>" width="180"><br><br>
      </td>
    </tr>

    <tr>
      <td><b>Nama Produk</b></td>
      <td>
        <?php echo $row->deskripsi ?>
      </td>
    </tr>

    <tr>
      <td><b>Harga</b></td>
      <td>
        <input type="hidden" name="harga" value="<?php echo $row->harga; ?>">
        <?php echo "Rp. ".$row->harga ?>
      </td>
    </tr>

    <tr>
      <td><b>Stok<b></td>
      <td>
        <input type="hidden" name="sisa" value="<?php echo $sisa ?>">
        <?php echo $sisa ?>
      </td>
    </tr>


    <tr>
      <td><b>Jumlah<b></td>
      <td>
        <input type="number" name="qty" min="1">
      </td>
    </tr>

    <tr>
      <td><b>Kurir Pengiriman<b></td>
      <td>
        <select name="kurir">
          <option>-- pilih salah satu --</option>
          <option value="POS">POS Indonesia</option>
          <option value="JNE">JNE</option>
          <option value="TIKI">TIKI</option>
          <option value="KILAT">KILAT</option>
          <option value="SICEPAT">SI-CEPAT</option>
          <option value="GOJEK">GO-JEK</option>
        </select>
      </td>
    </tr>

    <tr>
      <td></td>
      <td>
        <input class="tombol-hijau" type="submit" name="belanja" value="Isi dalam keranjang">
        <a class="tombol-merah" href="?page=beranda">Kembali</a>
      </td>
    </tr>
  </table>

</form>

</div>

</body>
</html>