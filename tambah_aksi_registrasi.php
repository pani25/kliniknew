<?php 

include 'koneksi.php';
 

$nama = $_POST['nama'];
$tanggalLahir = $_POST['tanggalLahir'];
$tempatlahir = $_POST['tempatlahir'];
$umur = $_POST['umur'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$poli = $_POST['poli'];
$keluhan = $_POST['keluhan'];

mysqli_query($koneksi,"insert into pasien values('','$nama','$tanggalLahir','$tempatlahir','$umur','$jeniskelamin','$alamat','$poli','$keluhan')");
 

header("location:halaman_user.php?page=registrasi");
 
?>