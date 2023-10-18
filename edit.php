<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_tokomobil where idbarang='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>kodebarang</td>
					<td>
						<input type="hidden" name="idbarang" value="<?php echo $d['idbarang']; ?>">
						<input type="text" name="kodebarang" value="<?php echo $d['kodebarang']; ?>">
					</td>
				</tr>
				<tr>
					<td>namabarang</td>
					<td><input type="text" name="namabarang" value="<?php echo $d['namabarang']; ?>"></td>
				</tr>
				<tr>
					<td>satuanBarang</td>
					<td><input type="text" name="satuanBarang" value="<?php echo $d['satuanBarang']; ?>"></td>
				</tr>
                <tr>
					<td>stokbarang</td>
					<td><input type="text" name="stokbarang" value="<?php echo $d['stokbarang']; ?>"></td>
				</tr>
                <tr>
					<td>hargaBarang</td>
					<td><input type="text" name="hargaBarang" value="<?php echo $d['hargaBarang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>