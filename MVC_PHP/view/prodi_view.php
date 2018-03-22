<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
</head>
<body>
<h2 align="center">
	View Data Prodi
</h2>
<table border="1" cellpadding="10" cellspacing="0" align="center">
	<tr align="center">
		<td>
			ID Prodi
		</td>
		<td>
			Nama Prodi
		</td>
		<td>
			Singkatan
		</td>
		<td>
			Ka Prodi
		</td>
		<td>
			Sek Prodi
		</td>
		<td colspan="2">
			Aksi
		</td>
	</tr>
	<?php 
		while($row = mysql_fetch_array($data))
		{
			echo "
			<tr align=\"center\">
			<td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			<td><a href='index.php?url=prodicontroller&e=$row[0]'>Edit</a></td>
			<td><a href='index.php?url=prodicontroller&d=$row[0]' onclick=\"return confirm('Hapus Data?')\">Delete</a>
			</td>
			</tr>
			";
		}
	 ?>
</table>
<center><a href="index.php?url=prodicontroller&i=add">Tambah Data</a></center>
</body>
</html>