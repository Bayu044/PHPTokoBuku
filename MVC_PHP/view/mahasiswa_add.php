<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Mahasiswa</title>
</head>
<body>
<h1 align="center">
	Insert Data Mahasiswa
</h1>
<form method="post" action="">
	<table align="center">
		<tr>
			<td>
				NIM
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="nim">
			</td>
		</tr>
		<tr>
			<td>
				Nama
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="nama">
			</td>
		</tr>
		<tr>
			<td>
				Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<select id="prodi" name="prodi" required>
                  <option>--Pilih Nama Prodi--</option>
                  <?php
                    while($baris = mysql_fetch_array($view))
                    {
                      echo'<option value='.$baris['idprodi'].'>'.$baris['namaprodi'].'</option>';
                    }

                  ?>
                </select>
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
		$main = new mahasiswacontroller();
		$main->insert();
	}
 ?>