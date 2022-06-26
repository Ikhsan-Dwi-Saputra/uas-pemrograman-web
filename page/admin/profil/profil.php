<div class="box-title">
    <h1 >Profil Admin</h1>
</div>
<div id="box2">
  <?php
  include 'lib/koneksi.php';
  $user = $_SESSION['username'];
  $ambiluser = $conn->prepare("SELECT * FROM tbl_users WHERE username =:user");
  $ambiluser->bindparam(':user', $user);
  $ambiluser->execute();
  $data = $ambiluser->fetch(PDO::FETCH_OBJ);
   ?>
  <table class="news">
  <tr>
        <td><img src="img/12050113500.jpg" width="150"></td>
        <td>
          <input type="file" name="gambar" required>
        </td>
      </tr>
    <tr>
      <td>Status</td>
      <td>
        <input type="button" value="<?php echo $data->title; ?>" class="btnProfilAd">
      </td>
    </tr>
    <tr>
      <td>Nama Lengkap</td>
      <td>
        <?php echo $data->nama_lengkap; ?>
      </td>
    </tr>
    <tr>
      <td>Email</td>
      <td>
        <?php echo $data->email; ?>
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>
        <?php echo $data->alamat; ?>
      </td>
    </tr>
    <tr>
      <td>No Hp</td>
      <td>
        <?php echo $data->no_hp; ?>
      </td>
    </tr>
    <tr>
      <td>Username</td>
      <td>
        <?php echo $data->username; ?>
      </td>
    </tr>
    <tr>
      <td>Password</td>
      <td>
        <input type="password" name="" value="<?php echo $data->password; ?>" disabled>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <a class="tombol-hijau" href="?page=profilad_ubah">Ubah</a>
        <a class="tombol-merah" href="?page=beranda">Kembali</a>
      </td>
    </tr>
  </table>
  <br>
</div>
