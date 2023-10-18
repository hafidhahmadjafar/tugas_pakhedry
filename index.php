<!DOCTYPE html>
<html>
<head>
	<title>toko mobil hafidh</title>
</head>
<body>
 
	<h2>welcome</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>idbarang</th>
			<th>kodebarang</th>
			<th>namabarang</th>
			<th>satuanBarang</th>
			<th>stokbarang</th>
            <th>hargaBarang</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_tokomobil");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kodebarang']; ?></td>
				<td><?php echo $d['namabarang']; ?></td>
				<td><?php echo $d['satuanBarang']; ?></td>
                <td><?php echo $d['stokbarang']; ?></td>
                <td><?php echo $d['hargaBarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['idbarang']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['idbarang']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>