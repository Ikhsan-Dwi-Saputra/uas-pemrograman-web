<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ikhsan Computer Store</title>
</head>
<body>
  <div class="box-title">
    <h1 style="color : black;">Barang Terbaru Dan Original</h1>
</div>
<div id="boxBeranda">
  <table>
  <tr>
  <?php
  include 'lib/koneksi.php';
  $no = 1;
  $query = $conn->prepare("SELECT * FROM tbl_barang");
  $query->execute();

  $data = $query->fetchAll();

  foreach ($data as $value) { ?>
    <td class="list">
      <img src="img/laptop/<?php echo $value['nama_image']; ?>" width="200">
    <br>
    <h1 style="font-size: 1rem; padding: 0; margin: 0;"><?php echo $value['deskripsi']; ?></h1>
    <br><b><?php echo "Rp.".$value['harga']; ?></b>
    <br>
    <?php

    $id = $value['id_barang'];
    $query = $conn->prepare("SELECT SUM(qty)AS jumlah FROM tbl_pesanan WHERE id_barang=:id");
    $query->bindparam(':id', $id);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_OBJ);
    $hasil = $data->jumlah;

    $stok = $value['stok'];
    $sisa = ($stok-$hasil);
    ?>
    <br>
    <?php
    if ($sisa > 0){
    if (isset ($_SESSION['username']) != ""){ ?>
      <a class="beli"href="?page=belanja_detail&id=<?php echo $value['id_barang']; ?>&st=<?php echo $sisa; ?>" >Lihat Produk</a>
    <?php }} ?>
    </td>
  <?php
    if ($no%4 == 0) echo "</tr><tr>";
    $no++;
    } ?>
</tr>
</table>
</div>

</body>
</html>