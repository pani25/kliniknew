<html>
<head>
	<title>SISTEM INFORMASI LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	
 <center><img src="asset/logo.png" width="160"/></center>
 <h1> SISTEM INFORMASI KLINIK </h1>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center><p> login user (username:"nova" pass:"nova12345")</p>
					<p> Login Pegawai (username:"ahmad" pass:"ahmad12345")</p></center>
		</form>
		
	</div>
 
 
</body>
</html>