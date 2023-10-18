<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kodebarang = $_POST['kodebarang'];
$namabarang = $_POST['namabarang'];
$satuanBarang = $_POST['satuanBarang'];
$stokbarang = $_POST['stokbarang'];
$hargaBarang = $_POST['hargaBarang'];
 
// update data ke database
mysqli_query($koneksi,"update tb_tokomobil set kodebarang='$kodebarang', namabarang='$namabarang', satuanBarang='$satuanBarang', stokbarang ='$stokbarang ' where $hargaBarang ='$hargaBarang '");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>