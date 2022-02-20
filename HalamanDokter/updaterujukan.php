<?php 

include 'koneksi.php';
 

$nama = $_POST['nama'];
$keluhan = $_POST['keluhan'];
$tindakan = $_POST['tindakan'];
$resepObat = $_POST['resepObat'];
 

mysqli_query($koneksi,"update tindakan set nama='$nama', keluhan='$keluhan', tindakan='$tindakan', resepObat='$resepObat' where id='$id'");
 

header("location:halaman_dokter.php?page=rujukan");
 
?>