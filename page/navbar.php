<?php
session_start();
if (isset ($_SESSION['username'])){
  if ($_SESSION['title'] == 'user'){
    $username = $_SESSION['username'];
    $title = $_SESSION['title'];

    echo "<li><a style='font-size: 18px' class='text-uppercase' href='?page=beranda'>Beranda</a></li>";
    echo "<li><a style='font-size: 18px' class=  'text-uppercase' href='?page=belanja'>Pesanan</a></li>";
    echo "<li><a style='font-size: 18px' class= 'text-uppercase' href='?page=profil'>Profil</a></li>";
    echo "<li style='font-size: 18px' class='logout'><a class= 'text-uppercase' href='page/logout.php'>keluar</a></li>";
    echo "<li class='login'><a style='font-size: 18px'><b>Hallo, </b> $username</a></li>";
  }
   elseif ($_SESSION['title'] == 'admin') {
    $user = $_SESSION['username'];
    $title = $_SESSION['title'];
    echo "<li class='active'><i class='fa fa-edit'></i><span><a href='?page=beranda2'>Beranda</a><span></li>";
  echo "<li><i class='fa fa-edit'></i><span><a href='?page=barang'>Barang</a><span></li>";
  echo "<li><i class='fa fa-edit'></i><span><a href='?page=transaksi'>Transaksi</a><span></li>";
  echo "<li><i class='fa fa-edit'></i><span><a href='?page=pesan'>Pesan</a><span></li>";
  echo "<li><i class='fa fa-edit'></i><span><a href='?page=user'>User</a><span></li>";
  echo "<li><i class='fa fa-edit'></i><span><a href='?page=profilad'>Profil</a><span></li>";
  echo "<li class='logout'><i class='fa fa-edit'></i><span><a href='page/logout.php'>keluar</a><span></li>";
  
}
} else {
  echo "<li><a href='?page=beranda'>Beranda</a></li>";
  echo "<li class='login'><a href='page/login.php'>Masuk</a></li>";
}
 ?>
