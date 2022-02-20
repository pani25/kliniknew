<?php 

include 'koneksi.php';
 

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
 

mysqli_query($koneksi,"update user set nama='$nama', username='$username', password='$password', level='$level' where id='$id'");
 

header("location:halaman_dokter.php?page=dokter");
 
?>