<?php 

include 'koneksi.php';
 

$namaObat = $_POST['namaObat'];
$hargaObat = $_POST['hargaObat'];

 

mysqli_query($koneksi,"update obat set namaObat='$namaObat', hargaObat='$hargaObat'");
 

header("location:halaman_pegawai.php?page=pegawai");
 
?>