<?php

try {
  $conn = new PDO("mysql:host=localhost;dbname=ikhsancomputerstore","root","");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
  print "Koneksi atau query bermasalah" . $e->getMessage() . "</br>";
  die();
}
$koneksi = mysqli_connect("localhost","root","","ikhsancomputerstore");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 ?>
