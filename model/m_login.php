<?php  
	class Login {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}


		public function pengguna($email,$password) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM pengguna WHERE email='$email' AND password='$password'  ";
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
			elseif ($kalori>1100 or $kalori<=1300) {
				$hasil=1300;
			}
			elseif ($kalori>1300 or $kalori<=1500) {
				$hasil=1500;
			}
			elseif ($kalori>1500 or $kalori<=1700) {
				$hasil=1700;
			}
			elseif ($kalori>1700 or $kalori<=1900) {
				$hasil=1900;
			}
			elseif ($kalori>1900 or $kalori<=2100) {
				$hasil=2100;
			}
			elseif ($kalori>2100 or $kalori<=2300) {
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
	}

 ?>