<?php 
	//include class model
	include "model/ProdiModel.php";

	class prodicontroller
	{
		//variabel public
		public $model;

		//inisialisasi awal untuk class
		function __construct()
		{
			//variabel mahasiswamodel merupakan objek baru yang dibuat dari class model
			$this->prodimodel = new prodimodel();
		}

		function index()
		{
			//menampilkan data mahasiswa saat load menu mahasiswa
			$data = $this->prodimodel->selectAll();
			//memanggil view.php pada folder view
			include "view/prodi_view.php";
		}

		function viewInsert()
		{
			//meampilkan halaman add data
			include "view/prodi_add.php";
		}

		function insert()
		{
			$idprodi = $_POST['idprodi'];
			$namaprodi = $_POST['namaprodi'];
			$singkatan = $_POST['singkatan'];
			$kaprodi = $_POST['kaprodi'];
			$sekprodi = $_POST['sekprodi'];

			$insert = $this->prodimodel->insertProdi($idprodi, $namaprodi, $singkatan, $kaprodi, $sekprodi);
			header("location:index.php?url=prodicontroller");
		}

		function delete($id)
		{
			//mengakses fungsi deleteMhs pada model dengan parameter nim
			$delete = $this->prodimodel->deleteProdi($id);

			//redirect ke halaman view jika sudah berhasil update
			header("location:index.php?url=prodicontroller");
		}

		function viewEdit($id)
		{
			//select data mahasiswa dengan nim
			$data = $this->prodimodel->selectProdi($id);

			//fetch hasil select
			$row = mysql_fetch_row($data);

			//menampilkan halaman untuk mengedit data
			include 'view/prodi_edit.php';
		}

		function update()
		{
			$idprodi = $_POST['idprodi'];
			$namaprodi = $_POST['namaprodi'];
			$singkatan = $_POST['singkatan'];
			$kaprodi = $_POST['kaprodi'];
			$sekprodi = $_POST['sekprodi'];

			$update = $this->prodimodel->updateProdi($idprodi, $namaprodi, $singkatan, $kaprodi, $sekprodi);
			header("location:index.php?url=prodicontroller");
		}
	}
 ?>