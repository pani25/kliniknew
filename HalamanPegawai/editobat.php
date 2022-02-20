<div class="halaman">
	<h2> EDIT DATA OBAT </h2>
</div>

    <br/>
        <a href="halaman_pegawai.php?page=obat" class="tombol">KEMBALI</a>
        <br/>
	<br/>

    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from obat where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

<form method="post" action="HalamanPegawai/updateobat.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="namaObat" value="<?php echo $d['namaObat']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="hargaObat" value="<?php echo $d['hargaObat']; ?>"></td>
				</tr>>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
</form>
<?php 
	}
	?>