
<div id="boxBerandaa">
<h1>Konfirmasi Pembayaran</h1>
<?php

    include 'lib/koneksi.php';


    $total = $_GET['jum'];
    $id = $_GET['id'];
    try {
      $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $insert = $conn->prepare("INSERT INTO tbl_pesanan (id_user,id_barang,qty,kurir,date_in,total) SELECT id_user,id_barang,qty,kurir,date_in,total FROM tbl_keranjang WHERE id_user=:id");
      $insert->bindparam(':id', $id);
      $insert->execute();

      $delete = $conn->prepare("DELETE FROM tbl_keranjang WHERE id_user=:id");
      $delete->bindparam(':id', $id);
      $delete->execute();
      ?>
      <div class="keranjang">
  <table class="news">
    <tr>
      <td>Status</td>
      <td><a class="tombol-hijau">Pesanan Sukses</a></td>
    </tr>
    <tr>
      <td>Jumlah Pembayaran</td>
      <td><b><?php echo "Rp. ".$total; ?></b></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td>
       Transfer Ke Rekening :<br>
        BANK BSI<br>

        No Rekening : 09-200-23132252-29<br>
        A.N : Ikhsan Dwi Saputra<br>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        SEMOGA SUKSES DAN TERIMA KASIH  <a class="tombol-hijau" href="?page=belanja">Detail Pesanan</a>
      </td>
    </tr>
  </table>
  </div>
   <?php
    } catch (PDOexception $e) {
      print "Added data failed: " . $e->getMessage() . "<br/>";
       die();
    }

 ?>
</div>
