<div class="box-title">
    <h1><b>Transaksi Pembelian Barang</b></h1>
</div>
<div id="box2">
  <h1 style="text-align: center;">Detail Pembelian Barang</h1>

  <?php

  include 'lib/koneksi.php';
  $id = $_GET['id'];
  $query = $conn->prepare("SELECT * FROM tbl_pesanan
                          JOIN tbl_barang ON tbl_pesanan.id_barang=tbl_barang.id_barang
                          JOIN tbl_users ON tbl_pesanan.id_user=tbl_users.id_user
                          WHERE tbl_pesanan.id_pesanan=:id");
  $query->bindparam(':id', $id);
  $query->execute();
  $data = $query->fetch(PDO::FETCH_OBJ);

   ?>
   <table class="news">
     <tr>
        <td>Id Pesanan</td>
        <td><?php echo $data->id_pesanan; ?></td>
     </tr>
     <tr>
        <td>Nama Barang</td>
        <td><?php echo "[".$data->id_barang."] ".$data->deskripsi; ?></td>
     </tr>
     <tr>
        <td>Harga</td>
        <td><?php echo "Rp. ".$data->harga; ?></td>
     </tr>
     <tr>
        <td>Total Pembayaran</td>
        <td><?php echo "Rp. ".$data->total; ?></td>
     </tr>
     <tr>
        <td>Jumlah</td>
        <td><?php echo $data->qty; ?></td>
     </tr>
     <tr>
        <td>Nama Pemesan</td>
        <td><?php echo "[".$data->id_user."] ".$data->nama_lengkap; ?></td>
     </tr>
     <tr>
        <td>Email</td>
        <td><?php echo $data->email; ?></td>
     </tr>
     <tr>
        <td>No HP</td>
        <td><?php echo $data->no_hp; ?></td>
     </tr>
     <tr>
        <td>Alamat</td>
        <td><?php echo $data->alamat; ?></td>
     </tr>
     <tr>
       <td></td>
       <td>
         <a class="tombol-merah" href="?page=transaksi">Kembali</a>
       </td>
     </tr>
   </table>
<br>
</div>
