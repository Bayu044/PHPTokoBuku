<!DOCTYPE html>
<html>
<head>
	<title>Update Data Prodi</title>
</head>
<body>
<h1 align="center">
	Insert Data Prodi
</h1>
<form method="post" action="">
	<table align="center">
		<tr>
			<td>
				ID Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="idprodi" value="<?=$row[0]?>" readonly>
			</td>
		</tr>
		<tr>
			<td>
				Nama Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="namaprodi" value="<?=$row[1]?>" >
			</td>
		</tr>
		<tr>
			<td>
				Singkatan
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="singkatan" value="<?=$row[2]?>" >
			</td>
		</tr>
		<tr>
			<td>
				Ka Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="kaprodi" value="<?=$row[3]?>" >
			</td>
		</tr>
		<tr>
			<td>
				Sek Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="sekprodi" value="<?=$row[4]?>" >
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td align="right">
				<input type="submit" name="submit" value="Update">
			</td>
		</tr>
	</table>
</form>
</body>
</html>

<?php 
	if(isset($_POST['submit']))
	{
		//jika button submit di klik maka panggil fungsi insert pada controller
		$main = new prodicontroller();
		$main->update();
	}
 ?>