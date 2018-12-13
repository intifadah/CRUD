<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | intifada95.blogspot.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | intifada95.blogspot.com</h1>
		<h3>Update Data</h3>
	</center>
	<?php foreach($tb_buku as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul</td>
				<td>
					<input type="hidden" name="id_buku" value="<?php echo $u->id_buku ?>">
					<input type="text" name="judul" value="<?php echo $u->judul ?>">
				</td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" value="<?php echo $u->pengarang ?>"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="text" name="foto" value="<?php echo $u->foto ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>