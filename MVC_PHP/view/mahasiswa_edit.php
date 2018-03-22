<!DOCTYPE html>
<html>
<head>
	<title>Update Data Mahasiswa</title>
</head>
<body>
<h1 align="center">
	Update Data Mahasiswa
</h1>
<form method="post" action="">
	<table align="center" border="0" cellpadding="5" cellspacing="0">
		<tr>
			<td>
				NIM
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="nim" value="<?=$row[0]?>" readonly size="45"/>
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
				<input type="text" name="nama" value="<?=$row[1]?>" size="45"/>
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
				<select id="prodi" class="form-control" name="prodi" required>
                  <?php
                    // $view = mysql_query("select * from Genre");

                    while($baris = mysql_fetch_array($view))
                    {
                      if($baris['idprodi'] == $row[2])
                      {
                        echo'<option selected="selected" value='.$baris['idprodi'].'>'.$baris['namaprodi'].'</option>';
                      }
                      else
                      {
                        echo'<option value='.$baris['idprodi'].'>'.$baris['namaprodi'].'</option>';
                      }
                    }
                  ?>
                </select>
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
		//jika button submit di klik maka panggil fungsi update pada controller
		$main = new mahasiswacontroller();
		$main->update();
	}
 ?>