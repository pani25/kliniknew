<div class="halaman">
	<h2> TAMBAH RUJUKAN BARU </h2>
</div>

    <br/>
        <a href="halaman_dokter.php?page=home" class="tombol">KEMBALI</a>
        <br/>
	<br/>

    <form method="post" action="tambah_aksi_rujukan.php">
		<table width=60%>
			<tr>			
				<td>Nama</td>
				<td>
				<select name="nama">
					<option>--Pilih pasien--</option>
					<?php
					   include 'koneksi.php';
					   $data = mysqli_query($koneksi,"select * from pasien");
					   while($row = mysqli_fetch_array($data)){ ?>

						<option value="<?=$row['nama'];?>"><?=$row['nama'];?></option>
					
					   <?php } ?>
				</select>
				</td>
			</tr>
			<tr>
				<td>Keluhan</td>
				<td><textarea name="keluhan"></textarea></td>
			</tr>
			<tr>
				<td>Tindakan</td>
				<td><textarea name="tindakan"></textarea></td>
			</tr>
			<tr>			
				<td>Resep Obat</td>
				<td>
				<select name="resepObat">
					<option>--Pilih obat--</option>
					<?php
					   include 'koneksi.php';
					   $data = mysqli_query($koneksi,"select * from obat");
					   while($row = mysqli_fetch_array($data)){ ?>

						<option value="<?=$row['id'];?>"><?=$row['namaObat'];?></option>
					
					   <?php } ?>
				</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>