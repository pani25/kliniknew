<div class="halaman">
	<h2> DATA USER</h2>
</div>

<a href="halaman_user.php?page=tambah" class="tombol">+ TAMBAH USER</a>
<br/>
<br/>
	<table border="1" width="100%">
        <tr>
            <th>NO</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Level</th>
			<th>OPSI</th>
		</tr>

        <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from user");
            while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['username']; ?></td>
                    <td><?php echo $d['level']; ?></td>
                    <td>
                        <a href="halaman_user.php?page=edit&id=<?= $d['id']; ?>">EDIT</a>
                        <a href="hapususer.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
        </tr>
        <?php } ?>
	</table>