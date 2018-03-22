<html>
	<b>Menu</b><br>
	<a href="index.php?url=MahasiswaController">Mahasiswa</a>
	<a href="index.php?url=ProdiController">Prodi</a>
</html>

<?php 
	if(isset($_GET['url']))
	{
		$controller = $_GET['url'];

		include "controller/".$controller.".php";

		//variabel main merupakan objek baru yang dibuat dari class mahasiswa
		$main = new $controller();

		//kondisi ntuk menampilkan halaman web yang diminta 
		//kondisi untuk mengakses halaman edit
		if(isset($_GET['e']))
		{
			$nim = $_GET['e'];
			$main->viewEdit($nim);
		}
		//kondisi untuk menghapus data (mengakses fungsi delete)
		else if(isset($_GET['d']))
		{
			$nim = $_GET['d'];
			$main->delete($nim);
		}
		//kondidi untuk mengakses halaman add
		else if(isset($_GET['i']))
		{
			$main->viewInsert();
		}
		//kondisi awal(menampilkan seluruh data)
		else
		{
			$main->index();
		}
	}
 ?>