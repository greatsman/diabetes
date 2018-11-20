<?php
	class Pengguna {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($id_pengguna = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM pengguna";
			if($id != null){
				$sql .= " WHERE id_pengguna = $id_pengguna";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function info_pribadi($id_pengguna) {
			$db = $this->mysqli->conn;
			$sql = "SELECT tinggi,berat,jenis,umur,nilai_aktivitas,nilai,aktivitas,BBI FROM pengguna,aktivitas WHERE id_pengguna=$id_pengguna
							and pengguna.nilai_aktivitas=aktivitas.nilai";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function info_kesehatan($id_pengguna) {
			$db = $this->mysqli->conn;
			$sql = "SELECT energi,protein FROM pengguna WHERE id_pengguna=$id_pengguna";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function cek_protein($protein) {
			if ($protein<=40) {
				$hasil=30;
			}
			elseif ($protein>40 or $protein<=50) {
				$hasil=40;
			}
			else {
				$hasil=50;
			}
			return $hasil;
		}

		public function cek_kalori($kalori) {
			if ($kalori<=1100) {
				$hasil=1100;
			}
			elseif ($kalori<=1300) {
				$hasil=1300;
			}
			elseif ($kalori<=1500) {
				$hasil=1500;
			}
			elseif ($kalori<=1700) {
				$hasil=1700;
			}
			elseif ($kalori<=1900) {
				$hasil=1900;
			}
			elseif ($kalori<=2100) {
				$hasil=2100;
			}
			elseif ($kalori<=2500) {
				$hasil=2300;
			}
			else {
				$hasil=2500;
			}
			return $hasil;
		}

		public function kelas_protein($hasil_protein) {
			if ($hasil_protein=30) {
				$hasil="protein30";
			}
			elseif ($hasil_protein=40) {
				$hasil="protein40";
			}
			else {
				$hasil="protein50";
			}
			return $hasil;
		}

		public function grafik($kelas_protein,$cek_kalori) {
			$db = $this->mysqli->conn;
			$sql = "SELECT energi,protein,lemak,karbohidrat FROM $kelas_protein WHERE kalori='$cek_kalori'";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}



		public function cek_daftar($email) {
			$db = $this->mysqli->conn;
			$sql = "SELECT email FROM pengguna WHERE email='$email'";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}



		public function tambah($nama_pengguna, $tinggi, $berat, $jenis, $umur, $nilai_aktivitas, $k_aktivitas, $k_umur, $k_tubuh,  $BBI, $BMR, $energi, $protein, $email,  $password){
			$db = $this->mysqli->conn;
			$db->query ("INSERT INTO pengguna VALUES ('', '$nama_pengguna', '$tinggi', '$berat', '$jenis', '$umur', '$nilai_aktivitas', '$k_aktivitas', '$k_umur', '$k_tubuh', '$BBI', '$BMR', '$energi', '$protein', '$email', '$password')") or die ($db->error);
		}

		public function edit($sql){
				$db = $this->mysqli->conn;
				$db->query($sql) or die ($db->error);
			}


		public function hapus ($id){
			$db = $this->mysqli->conn;
			$db->query ("DELETE FROM sup_user WHERE id = '$id' ") or die ($db->error);
		}

	}

 ?>
