<?php 
	class prodimodel
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
			$query = "select * from prodi";
			return mysql_query($query);
		}

		function insertProdi($idprodi, $namaprodi, $singkatan, $kaprodi, $sekprodi)
		{
			$query = "insert into prodi values ('$idprodi', '$namaprodi', '$singkatan', '$kaprodi', '$sekprodi')";
			return mysql_query($query);
		}

		function updateProdi($idprodi, $namaprodi, $singkatan, $kaprodi, $sekprodi)
		{
			$query = "update prodi set namaprodi='$namaprodi', singkatan='$singkatan', kaprodi='$kaprodi', sekprodi='$sekprodi' where idprodi='$idprodi'";
			return mysql_query($query);
		}

		function deleteProdi($id)
		{
			$query = "delete from prodi where idprodi = '$id'";
			return mysql_query($query);
		}

		function selectProdi($id)
		{
			$query = "select * from prodi where idprodi = '$id'";
			return mysql_query($query);
		}
	}
 ?>