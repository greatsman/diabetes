<?php
	class Menu {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($tabel) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM $tabel ORDER BY nama_makanan ASC ";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function riwayat_menu($pengguna) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM menu WHERE pengguna = '$pengguna' ";
			$query = $db->query($sql) or die ($db->error);
			return $query;

		}

		public function detail_menu($id_menu) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM menu WHERE id_menu = '$id_menu' ";
			$query = $db->query($sql) or die ($db->error);
			return $query;

		}

		public function print_menu($tabel,$nama_makanan) {
			$db = $this->mysqli->conn;
			$sql = "SELECT urt FROM $tabel WHERE nama_makanan = '$nama_makanan' ";
			$query = $db->query($sql) or die ($db->error);
			$data  = $query->fetch_object();
			$hasil = $data->urt;
			return $hasil;

		}

		public function print_berat($tabel,$nama_makanan) {
			$db = $this->mysqli->conn;
			$sql = "SELECT nilai_berat FROM $tabel WHERE nama_makanan = '$nama_makanan' ";
			$query = $db->query($sql) or die ($db->error);
			$data  = $query->fetch_object();
			$hasil = $data->nilai_berat;
			return $hasil;

		}

		public function print_berat2($nilai_berat,$id_menu) {
			$db    = $this->mysqli->conn;
			$sql   = "SELECT $nilai_berat FROM menu WHERE id_menu='$id_menu'";
			$query = $db->query($sql) or die ($db->error);
			$data  = $query->fetch_object();
			$hasil = $data->$nilai_berat;
			return $hasil ;
		}


		public function nilai_makanan($tabel,$nama_makanan) {
			$db    = $this->mysqli->conn;
			$sql   = "SELECT nilai_urt FROM $tabel WHERE nama_makanan = '$nama_makanan' ";
			$query = $db->query($sql) or die ($db->error);
			$data  = $query->fetch_object();
			$hasil = $data->nilai_urt;
			return $hasil;
		}

		public function nilai_berat($tabel,$nama_makanan) {
			$db    = $this->mysqli->conn;
			$sql   = "SELECT nilai_berat FROM $tabel WHERE nama_makanan = '$nama_makanan' ";
			$query = $db->query($sql) or die ($db->error);
			$data  = $query->fetch_object();
			$hasil = $data->nilai_berat;
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

		public function kelas_kalori($tabel,$kalori,$kolom) {
			$db    = $this->mysqli->conn;
			$sql   = "SELECT $kolom FROM $tabel WHERE kalori = '$kalori' ";
			$query = $db->query($sql) or die ($db->error);
			$data  = $query->fetch_object();
			$hasil = $data->$kolom;
			return $hasil;
		}


		// public function cek_daftar($email) {
		// 	$db = $this->mysqli->conn;
		// 	$sql = "SELECT email FROM pengguna WHERE email='$email'";
		// 	$query = $db->query($sql) or die ($db->error);
		// 	return $query;
		// }

		public function tambah($nama_menu,
                  $p1,$p1_akhir,$p1_berat,
                  $p2,$p2_akhir,$p2_berat,
                  $p3,$p3_akhir,$p3_berat,
                  $p4,$p4_akhir,$p4_berat,
                  $p5,$p5_akhir,$p5_berat,
                  $p101, $p101_akhir,$p101_berat,
                  $p102, $p102_akhir,$p102_berat,
                  $p103, $p103_akhir,$p103_berat,
                  $p104, $p104_akhir,$p104_berat,
                  $s1, $s1_akhir,$s1_berat,
                  $s2, $s2_akhir,$s2_berat,
                  $s3, $s3_akhir,$s3_berat,
                  $s4, $s4_akhir,$s4_berat,
                  $s5, $s5_akhir,$s5_berat,
                  $p161, $p161_akhir,$p161_berat,
                  $p162, $p162_akhir,$p162_berat,
                  $p163, $p163_akhir,$p163_berat,
                  $p164, $p164_akhir,$p164_berat,
                  $p165, $p165_akhir,$p165_berat,
                  $m1,$m1_akhir,$m1_berat,
                  $m2,$m2_akhir,$m2_berat,
                  $m3,$m3_akhir,$m3_berat,
                  $m4,$m4_akhir,$m4_berat,
                  $m5,$m5_akhir,$m5_berat,
                  $m6,$m6_akhir,$m6_berat,
                  $id_pengguna,
                  $catatan,
                  $tgl){

			$db = $this->mysqli->conn;
			$db->query ("INSERT INTO menu VALUES 
					   ('',
					   '$nama_menu',
					   '$p1', '$p1_akhir','$p1_berat',
					   '$p2', '$p2_akhir','$p2_berat',
					   '$p3', '$p3_akhir','$p3_berat',
					   '$p4', '$p4_akhir','$p4_berat',
					   '$p5', '$p5_akhir','$p5_berat',
					   '$p101', '$p101_akhir','$p101_berat',
					   '$p102', '$p102_akhir','$p102_berat',
					   '$p103', '$p103_akhir','$p103_berat',
					   '$p104', '$p104_akhir','$p104_berat',
					   '$s1', '$s1_akhir','$s1_berat',
					   '$s2', '$s2_akhir','$s2_berat',
					   '$s3', '$s3_akhir','$s3_berat',
					   '$s4', '$s4_akhir','$s4_berat',
					   '$s5', '$s5_akhir','$s5_berat',
					   '$p161', '$p161_akhir','$p161_berat',
					   '$p162', '$p162_akhir','$p162_berat',
					   '$p163', '$p163_akhir','$p163_berat',
					   '$p164', '$p164_akhir','$p164_berat',
					   '$p165', '$p165_akhir','$p165_berat',
					   '$m1', '$m1_akhir','$m1_berat',
					   '$m2', '$m2_akhir','$m2_berat',
					   '$m3', '$m3_akhir','$m3_berat',
					   '$m4', '$m4_akhir','$m4_berat',
					   '$m5', '$m5_akhir','$m5_berat',
					   '$m6', '$m6_akhir','$m6_berat',
					   '$id_pengguna',
					   '$catatan',
					   '$tgl')") or die ($db->error);
		}

		public function edit($sql){
				$db = $this->mysqli->conn;
				$db->query($sql) or die ($db->error);
			}

		public function hapus ($id_menu){
			$db = $this->mysqli->conn;
			$db->query ("DELETE FROM menu WHERE id_menu = '$id_menu' ") or die ($db->error);
		}

	}

 ?>
