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
                    <h1 class="text text-large">MASUK</h1>
                    <p class="text text-normal">Belum, Punya Akun ? <span><a href="daftar.php" class="text text-links">Buat Akun</a></span>
                    </p>
                </div>
                <form name="login" class="form" action="login.php" method="post">
                <?php 
                session_start();
// menghubungkan php dengan koneksi database
include "../lib/koneksi.php";
 
// menangkap data yang dikirim dari form login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tbl_users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['title']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['title'] = "admin";
    // $_SESSION['status'] = $data['title']=="admin";
    // $_SESSION['status'] = $data->title;
		// alihkan ke halaman dashboard admin
        echo "<center><a class='tombol-biru'>Login Berhasil</a></center>";
        echo "<meta http-equiv='refresh' content='1;
              url=../dashboard.php?page=beranda2'>";
		// header("location:dashboard.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['title']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['title'] = "user";
    $_SESSION['status'] = $data['title'];
    // $_SESSION['status'] = $data->title;
		// alihkan ke halaman dashboard pegawai
        echo "<center><a class='tombol-biru'>Login Berhasil</a></center>";
        echo "<meta http-equiv='refresh' content='1;
              url=../index.php'>";
		// header("location:index.php"); 
	}else{
		// alihkan ke halaman login kembali
        echo "<center><a class='tombol-merah'>Login Gagal</a></center>";	
}
}else{
    echo "<center><a class='tombol-merah'>Login Gagal</a></center>";
}
}
?>
                    <div class="input-control">
                        <label for="username" class="input-label" hidden>Username</label>
                        <input type="text" name="username" class="input-field" placeholder="Username" required>
                    </div>
                    <div class="input-control">
                        <label for="password" class="input-label" hidden>Password</label>
                        <input type="password" name="password" class="input-field" placeholder="Password" required>
                    </div>
                    <div class="input-control">
                        <a href="../index.php" class="text text-links">kembali Ke Beranda</a>
                        <input type="submit" name="submit" class="input-submit" value="Login">
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
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
   
   
  </body>
</html>
