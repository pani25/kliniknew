<div class="halaman">
	<h2>PEMBAYARAN PASIEN</h2>
	<p></p>
</div>
	<table border="1" width="100%">
        <tr>
            <th>NO</th>
			<th>Nama Pasien</th>
			<th>Resep Obat</th>
			<th>Total Pembayaran</th>
			<th>Status</th>
		</tr>

        <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from pasien");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['idPasien']; ?></td>
                    <td><?php echo $d['idObat']; ?></td>
                    <td><?php echo $d['totalBayar']; ?></td>
					<td><?php echo $d['status']; ?></td>
                    <td>
                        <a href="" class="tombol">BAYAR</a>
                    </td>
        </tr>
        <?php } ?>
	</table>