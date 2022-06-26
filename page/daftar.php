<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="tes.css" />

  </head>
  <body>
  <div class="context">
  <main class="main">
        <div class="container">
            <section class="wrapper">
                <div class="heading">
                    <h1 class="text text-large">DAFTAR</h1>
                </div>
                <form name="login" class="form" action="daftar.php" method="post">
                <?php

            include "../lib/koneksi.php";
            session_start();
      
            if (isset($_POST['submit'])) {
                $namalengkap = $_POST['nama_lengkap'];
                $email = $_POST['email'];
                $nohp = $_POST['no_hp'];
                $alamat = $_POST['alamat'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $status = 'user';

                try {
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $pdo = $conn->prepare('INSERT INTO tbl_users (nama_lengkap, email, username, password, alamat, no_hp,title)
                          values (:nama_lengkap, :email, :username, :password, :alamat, :no_hp, :title)');
                    $insertdata = array(':nama_lengkap' => $namalengkap, ':email' => $email, 'username' => $username, 'password' => $password, ':alamat' => $alamat, ':no_hp' => $nohp, ':title' => $status);
                    $pdo->execute($insertdata);
                  
                    echo "<center><button class='tombol-biru'>pendaftaran berhasil</button></center>";
                    echo "<meta http-equiv='refresh' content='1;
              url=login.php'>";
                } catch (PDOexception $e) {
                    print "pendaftaran gagal dilakukan: " . $e->getMessage() . "<br/>";
                    die();
                }
            }
       
            ?>

                    <div class="input-control">
                        <label for="nama_lengkap" class="input-label" hidden>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="input-field" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="input-control">
                        <label for="email" class="input-label" hidden>Email</label>
                        <input type="email" name="email" class="input-field" placeholder="Email" required>
                    </div>
                    <div class="input-control">
                        <label for="nomor_hp" class="input-label" hidden>Nomor Hp</label>
                        <input type="text" name="no_hp" class="input-field" placeholder="Nomor Hp" required>
                    </div>
                    <div class="input-control">
                        <label for="username" class="input-label" hidden>Alamat</label>
                        <textarea name="alamat" rows="3" cols="80" placeholder="Alamat" required></textarea>
                    </div>
<hr>

                    <div class="input-control">
                        <label for="username" class="input-label" hidden>Username</label>
                        <input type="text" name="username" class="input-field" placeholder="Username" maxlength="6" required>
                    </div>
                    <div class="input-control">
                        <label for="password" class="input-label" hidden>Password</label>
                        <input type="password" name="password" class="input-field" placeholder="Password" maxlength="6" required>
                    </div>
                    <div class="input-control">
                        <a href="login.php" class="text text-links">Kembali Ke Login Page</a>
                        <input type="submit" name="submit" class="input-submit" value="Daftar">
                    </div>
                </form>
    </main>
    </div>
<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
   
   
  </body>
</html>
