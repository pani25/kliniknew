<div class="halaman">
	<h2> DATA OBAT</h2>
</div>

<a href="halaman_pegawai.php?page=tambahobat" class="tombol">+ TAMBAH OBAT</a>
<br/>
<br/>
	<table border="1" width="100%">
        <tr>
            <th>NO</th>
			<th>Nama Obat</th>
			<th>Harga Obat</th>
			<th>OPSI</th>
		</tr>

        <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from obat");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['namaObat']; ?></td>
                    <td><?php echo $d['hargaObat']; ?></td>
                    <td>
                        <a href="halaman_pegawai.php?page=editobat&id=<?= $d['id']; ?>">EDIT</a>
                        <a href="hapusobat.php?id=<?= $d['id']; ?>">HAPUS</a>
                    </td>
        </tr>
        <?php } ?>
	</table>