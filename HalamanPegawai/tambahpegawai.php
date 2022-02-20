<div class="halaman">
	<h2> TAMBAH PEGAWAI </h2>
</div>

    <br/>
        <a href="halaman_pegawai.php?page=pegawai" class="tombol">KEMBALI</a>
        <br/>
	<br/>

    <form method="post" action="tambah_aksi_pegawai.php">
		<table width=60%>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
            <tr>
				<td>Level</td>
				<td><input type="text" name="level"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>