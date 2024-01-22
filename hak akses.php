<?php 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Penjualan CRUD</title>
</head>
<body>
 
<h2>Penjualan</h2>
 
<!-- Create Form -->
<form action="create_penjualan.php" method="post">
	Jumlah Penjualan: <input type="text" name="jumlah_penjualan">
	Harga Jual: <input type="text" name="harga_jual">
	ID Pengguna: <input type="text" name="id_pengguna">
	<input type="submit" value="Create">
</form>
 
<!-- Read Data -->
<table border="1">
	<tr>
    	<th>ID Penjualan</th>
    	<th>Jumlah Penjualan</th>
    	<th>Harga Jual</th>
    	<th>ID Pengguna</th>
    	<th>Action</th>
	</tr>
	<?php foreach ($penjualanList as $penjualan) { ?>
    	<tr>
        	<td><?php echo $penjualan->getidPenjualan(); ?></td>
        	<td><?php echo $penjualan->getJumlahPenjualan(); ?></td>
        	<td><?php echo $penjualan->getHargaJual(); ?></td>
        	<td><?php echo $penjualan->getIdPengguna(); ?></td>
        	<td>
            	<a href="update_penjualan.php?id=<?php echo $penjualan->getidPenjualan(); ?>">Update</a>
            	<a href="delete_penjualan.php?id=<?php echo $penjualan->getidPenjualan(); ?>">Delete</a>
        	</td>
    	</tr>
	<?php } ?>
</table>
 
</body>
</html>
 
 
<!-- View HakAkses -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HakAkses CRUD</title>
</head>
<body>
 
<h2>HakAkses</h2>
 
<!-- Create Form -->
<form action="create_hak_akses.php" method="post">
	Nama Akses: <input type="text" name="nama_akses">
	Keterangan: <input type="text" name="keterangan">
	<input type="submit" value="Create">
</form>
 
<!-- Read Data -->
<table border="1">
	<tr>
    	<th>ID Akses</th>
    	<th>Nama Akses</th>
    	<th>Keterangan</th>
    	<th>Action</th>
	</tr>
	<?php foreach ($hakAksesList as $hakAkses) { ?>
    	<tr>
        	<td><?php echo $hakAkses->getIdAkses(); ?></td>
        	<td><?php echo $hakAkses->getNamaAkses(); ?></td>
        	<td><?php echo $hakAkses->getKeterangan(); ?></td>
        	<td>
            	<a href="update_hak_akses.php?id=<?php echo $hakAkses->getIdAkses(); ?>">Update</a>
            	<a href="delete_hak_akses.php?id=<?php echo $hakAkses->getIdAkses(); ?>">Delete</a>
        	</td>
    	</tr>
	<?php } ?>
</table>
 
</body>
</html>

?>