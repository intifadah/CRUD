<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | intifada95.blogspot.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | intifada95.blogspot.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="pengarang"></td>
			</tr>
			<tr>
				<td>Foto Buku</td>
				<td><input type="text" name="foto"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>