<?php 

include 'koneksi.php';
 

$id = $_GET['id'];
 
 

mysqli_query($koneksi,"delete from tindakan where id='$id'");
 

header("location:halaman_dokter.php?page=rujukan");
 
?>