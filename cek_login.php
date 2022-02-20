<?php 
session_start();
 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="user"){
 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		
		header("location:halaman_user.php");
 
	}else if($data['level']=="pegawai"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		header("location:halaman_pegawai.php");
 
	}else if($data['level']=="dokter"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "dokter";
		header("location:halaman_dokter.php");
 
	}else{
 
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>