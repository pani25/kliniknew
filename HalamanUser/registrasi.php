<div class="halaman">
	<h2>PENDAFTARAN PASIEN</h2>
	<p>Ini adalah halaman pendaftaran pasien</p>
</div>

<a href="halaman_user.php?page=tambah2" class="tombol"> + DAFTAR PASIEN BARU </a>
<br/>
<br/>
	<table border="1" width="100%">
        <tr>
            <th>NO</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Tempat Lahir</th>
			<th>Umur</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Poli yang dituju</th>
			<th>Keluhan</th>
			<th>OPSI</th>
		</tr>

        <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from pasien");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['tanggalLahir']; ?></td>
                    <td><?php echo $d['tempatlahir']; ?></td>
					<td><?php echo $d['umur']; ?></td>
                    <td><?php echo $d['jeniskelamin']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
					<td><?php echo $d['poli']; ?></td>
                    <td><?php echo $d['keluhan']; ?></td>
                    <td>
                        <a href="hapusregistrasi.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
        </tr>
        <?php } ?>
	</table>