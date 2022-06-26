<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include "../lib/koneksi.php";
 
// menangkap data yang dikirim dari form login
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
		// alihkan ke halaman dashboard admin
        echo "<center><a class='tombol-biru'>Login Berhasil</a></center>";
        echo "<meta http-equiv='refresh' content='1;
              url=../dashboard.php'>";
		// header("location:dashboard.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['title']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['title'] = "user";
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
 
?>