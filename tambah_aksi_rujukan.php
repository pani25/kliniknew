<?php 
include 'koneksi.php';
 
$nama = $_POST['nama'];
$keluhan = $_POST['keluhan'];
$tindakan = $_POST['tindakan'];
$resepObat = $_POST['resepObat'];
 
mysqli_query($koneksi,"insert into tindakan values('','$nama','$keluhan','$tindakan','$resepObat')");
 
header("location:halaman_dokter.php?page=rujukan");
 
?>