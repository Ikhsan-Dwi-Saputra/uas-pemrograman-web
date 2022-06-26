<div class="box-title">
    <h1>Kelola Barang</h1>
    <a href="?page=tambah_barang"class="tombol-hijau">Tambah Barang</a><br><br>
</div>
<div id="box">


  <?php
      include 'lib/koneksi.php';

      $hal = isset($_GET['hal']) ? $_GET['hal'] : 1;
      $batas = 5;
      $posisi = ($hal-1) * $batas;

      $query = $conn->prepare("SELECT * FROM tbl_barang LIMIT $posisi, $batas");
      $query->execute();
      $data = $query->fetchAll();
      $count = $query->rowCount();
  ?>
  
  <table class="news">
    <tr>
      <th>Id Barang</th>
      <th>Gambar</th>
      <th>Nama Barang</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Dibuat</th>
      <th>Aksi</th>
    </tr>
    <?php
    foreach ($data as $value): ?>
        <tr>
            <td><?php echo $value['id_barang'] ?></td>
            <td style="margin: 0 auto;">
              <img src="img/laptop/<?= $value['nama_image'];?>" width="150">
            </td>
            <td><?php echo $value['deskripsi'] ?></td>
            <td><?php echo $value['harga'] ?></td>
            <td><?php echo $value['stok'] ?></td>
            <td><?php echo $value['created'] ?></td>
            <td style="margin: auto;">
              <a class="tombol-hijau" href="?page=edit_barang&id=<?php echo $value['id_barang']; ?>">ubah</a><br><br>
              <a class="tombol-merah" href="?page=hapus_barang&id=<?php echo $value['id_barang']; ?>">hapus</a>
            </td>
        </tr>

    <?php
    endforeach;
     ?>
  </table>
  <br>
  <?php

    if ($count == 0){
      echo "<center>-- Belum ada data barang --</center>";
    }

    $semua = $conn->prepare("SELECT * FROM tbl_barang");
    $semua->execute();
    $jmldata = $semua->rowCount();
    $jmlhal = ceil($jmldata/$batas);
    $sebelum = $hal - 1;
    $berikut = $hal + 1;

    echo "<div class='paging'>";

    if ($hal > 1){
      echo "<span><a href='?page=barang&hal=1'><<</a></span>";
      echo "<span><a href='?page=barang&hal=$sebelum'>Previous</a></span>";
    }else {
      echo "<span><<</span>";
      echo "<span>Previous</span>";
    }

    if ($hal < $jmlhal){
      echo "<span><a href='?page=barang&hal=$berikut'>Next</a></span>";
      echo "<span><a href='?page=barang&hal=$jmlhal'>>></a></span>";
    }else {
      echo "<span>Next</span>";
      echo "<span>>></span>";
    }

    echo "</div>";
  ?>





</div>
