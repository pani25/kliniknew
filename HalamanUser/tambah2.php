<div class="halaman">
	<h2> DAFTAR PASIEN BARU </h2>
</div>

    <br/>
        <a href="halaman_user.php?page=registrasi" class="tombol">KEMBALI</a>
        <br/>
	<br/>

    <form method="post" action="tambah_aksi_registrasi.php">
		<table width=60%>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggalLahir"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><textarea name="tempatlahir"></textarea></td>
			</tr>
            <tr>
				<td>Umur</td>
				<td><input type="text" name="umur"></td>
			</tr>
            <tr>			
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jeniskelamin"></textarea></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Poli yang dituju</td>
				<td><input type="text" name="poli"></td>
			</tr>
            <tr>
				<td>Keluhan</td>
				<td><textarea name="keluhan"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>