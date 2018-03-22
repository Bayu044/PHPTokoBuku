<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Prodi</title>
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
				<input type="text" name="idprodi">
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
				<input type="text" name="namaprodi">
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
				<input type="text" name="singkatan">
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
				<input type="text" name="kaprodi">
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
				<input type="text" name="sekprodi">
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td align="right">
				<input type="submit" name="submit" value="Submit">
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
		$main->insert();
	}
 ?>