<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kodebarang = $_POST['kodebarang'];
$namabarang = $_POST['namabarang'];
$satuanBarang = $_POST['satuanBarang'];
$stokbarang = $_POST['stokbarang'];
$hargaBarang = $_POST['hargaBarang'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_tokomobil values('','$kodebarang','$namabarang','$satuanBarang','$stokbarang','$hargaBarang')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>

