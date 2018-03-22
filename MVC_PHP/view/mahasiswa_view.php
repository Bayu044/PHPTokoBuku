<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
</head>
<body>
<h2 align="center">
	View Data Mahasiswa
</h2>
<table border="1" cellpadding="10" cellspacing="0" align="center">
	<tr align="center">
		<td>
			NIM
		</td>
		<td>
			Nama
		</td>
		<td>
			Program Studi
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
			<td><a href='index.php?url=mahasiswacontroller&e=$row[0]'>Edit</a></td>
			<td><a href='index.php?url=mahasiswacontroller&d=$row[0]' onclick=\"return confirm('Hapus Data?')\">Delete</a>
			</td>
			</tr>
			";
		}
	 ?>
</table>
<center><a href="index.php?url=mahasiswacontroller&i=add">Tambah Data</a></center>
</body>
</html>