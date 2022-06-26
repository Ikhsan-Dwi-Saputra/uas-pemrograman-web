<div class="box-title">
    <h1>Transaksi Pembelian Barang</h1>
</div>
<div id="boxBeranda" style="color: white;">
  <h1>Transaksi</h1>

  <?php
  include 'lib/koneksi.php';
  $query = $conn->prepare("SELECT * FROM tbl_pesanan
                           JOIN tbl_barang ON tbl_pesanan.id_barang=tbl_barang.id_barang
                           JOIN tbl_users ON tbl_pesanan.id_user=tbl_users.id_user
                           ORDER BY date_in DESC");
  $query->execute();
  $data = $query->fetchAll();
  $count = $query->rowCount();
  ?>

  <table class="news">
    <tr>
      <th>Id Pesanan</th>
      <th>Nama Pemesan</th>
      <th>Id Barang</th>
      <th>Jumlah</th>
      <th>Kurir</th>
      <th>Tanggal Pembelian</th>
      <th>Total Bayar</th>
      <th>Status</th>
    </tr>
    <?php
    foreach ($data as $value): ?>
        <tr>
            <td><?php echo $value['id_pesanan'] ?></td>
            <td><?php echo "(".$value['id_user'].") ".$value['nama_lengkap'] ?></td>
            <td><?php echo $value['deskripsi'] ?></td>
            <td><?php echo $value['qty'] ?></td>
            <td><?php echo $value['kurir'] ?></td>
            <td><?php echo $value['date_in'] ?></td>
            <td><?php echo $value['total'] ?></td>
            <td>
              <a class="tombol-hijau">Sukses</a><br><br>
              <a class="tombol-hijau" href="?page=transaksi_detail&id=<?php echo $value['id_pesanan']; ?>">Detail</a>
            </td>
        </tr>
    <?php
    endforeach;
     ?>
  </table>
  <br>
  <?php
  if ($count == 0){
    echo "<center>-- Belum ada pesanan barang --</center>";
    echo "<br>";
  }
   ?>

</div>
