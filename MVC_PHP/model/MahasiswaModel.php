<?php 
	class mahasiswamodel
	{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct()
		{
			$connect = mysql_connect("localhost", "root", "");
			$db = mysql_select_db("mvc_php");
		}
		//fungsi untuk mengambil semua data dari tabel mahasiswa
		function selectAll()
		{
			$query = "select * from mahasiswa";
			return mysql_query($query);
		}

		function insertMhs($nim, $nama, $prodi)
		{
			$query = "insert into mahasiswa values ('$nim', '$nama', '$prodi')";
			return mysql_query($query);
		}

		function updateMhs($nim, $nama, $prodi)
		{
			$query = "update mahasiswa set nama='$nama', prodi='$prodi' where nim='$nim'";
			return mysql_query($query);
		}

		function deleteMhs($nim)
		{
			$query = "delete from mahasiswa where nim = '$nim'";
			return mysql_query($query);
		}

		function selectMhs($nim)
		{
			$query = "select * from mahasiswa where nim = '$nim'";
			return mysql_query($query);
		}

		function selectProdi()
		{
			$query = "select * from prodi";
			return mysql_query($query);
		}

		function selectView()
		{
			$query = "select a.nim, a.nama, b.namaprodi from mahasiswa a inner join prodi b on b.idprodi=a.prodi";
			return mysql_query($query);
		}
	}
 ?>