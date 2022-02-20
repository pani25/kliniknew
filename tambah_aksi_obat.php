<?php 
include 'koneksi.php';
 
$namaObat = $_POST['namaObat'];
$hargaObat = $_POST['hargaObat'];
 
mysqli_query($koneksi,"insert into obat values('','$namaObat','$hargaObat')");
 
header("location:halaman_pegawai.php?page=obat");
 
?>