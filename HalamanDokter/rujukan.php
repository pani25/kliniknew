<div class="halaman">
	<h2> DATA RUJUKAN</h2>
</div>

<a href="halaman_dokter.php?page=tambahrujukan" class="tombol">+ TAMBAH RUJUKAN</a>
<br/>
<br/>
	<table border="1" width="100%">
        <tr>
            <th>NO</th>
			<th>Nama</th>
			<th>Keluhan</th>
			<th>Tindakan</th>
			<th>Resep Obat</th>
            <th>Opsi</th>
		</tr>

        <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from tindakan JOIN obat ON tindakan.idObat = obat.id;");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['keluhan']; ?></td>
                    <td><?php echo $d['tindakan']; ?></td>
                    <td><?php echo $d['namaObat']; ?></td>
                    <td>
                        <a href="halaman_dokter.php?page=editrujukan&id=<?=$d['id']; ?>">EDIT</a>
                        <a href="hapusrujukan.php?id=<?=$d['id']; ?>">HAPUS</a>
                    </td>
        </tr>
        <?php } ?>
	</table>