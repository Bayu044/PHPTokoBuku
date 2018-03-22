<?php 
	//include class model
	include "model/MahasiswaModel.php";

	class mahasiswacontroller
	{
		//variabel public
		public $model;

		//inisialisasi awal untuk class
		function __construct()
		{
			//variabel mahasiswamodel merupakan objek baru yang dibuat dari class model
			$this->mahasiswamodel = new mahasiswamodel();
		}

		function index()
		{
			//menampilkan data mahasiswa saat load menu mahasiswa
			$data = $this->mahasiswamodel->selectView();
			
			//memanggil view.php pada folder view
			include "view/mahasiswa_view.php";
		}

		function viewInsert()
		{
			//meampilkan halaman add data
			$view = $this->mahasiswamodel->selectProdi();

			include "view/mahasiswa_add.php";
		}

		function insert()
		{
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$prodi = $_POST['prodi'];

			$insert = $this->mahasiswamodel->insertMhs($nim, $nama, $prodi);
			header("location:index.php?url=mahasiswacontroller");
		}

		function update()
		{
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$prodi = $_POST['prodi'];

			$update = $this->mahasiswamodel->updateMhs($nim, $nama, $prodi);
			header("location:index.php?url=mahasiswacontroller");
		}

		function delete($nim)
		{
			//mengakses fungsi deleteMhs pada model dengan parameter nim
			$delete = $this->mahasiswamodel->deleteMhs($nim);

			//redirect ke halaman view jika sudah berhasil update
			header("location:index.php?url=mahasiswacontroller");
		}

		function viewEdit($nim)
		{
			//select data mahasiswa dengan nim
			$data = $this->mahasiswamodel->selectMhs($nim);
			//fetch hasil select
			$row = mysql_fetch_row($data);
			$view = $this->mahasiswamodel->selectProdi();

			//menampilkan halaman untuk mengedit data
			include 'view/mahasiswa_edit.php';
		}
	}
 ?>