<?php 

include 'koneksi.php';
 

$id = $_GET['id'];
 
 

mysqli_query($koneksi,"delete from user where id='$id'");
 

header("location:halaman_user.php?page=user");
 
?>