<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | intifada95.blogspot.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | intifada95.blogspot.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>ID Buku</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($tb_buku as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->judul ?></td>
			<td><?php echo $u->pengarang ?></td>
			<td><?php echo $u->foto ?></td>
			<td>
			    <?php echo anchor('crud/edit/'.$u->id_buku,'Edit'); ?>
                <?php echo anchor('crud/hapus/'.$u->id_buku,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>