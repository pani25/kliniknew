<?php 

include 'koneksi.php';
 

$id = $_GET['id'];
 
 

mysqli_query($koneksi,"delete from pasien where id='$id'");
 

header("location:halaman_user.php?page=registrasi");
 
?>