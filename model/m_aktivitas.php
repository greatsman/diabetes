<?php
	class Aktivitas {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($aktivitas = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM aktivitas";
			if($id != null){
				$sql .= " WHERE ativitas = $aktivitas";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function sebagian($nilai) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM aktivitas WHERE nilai != $nilai" ;
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function edit($sql){
			$db = $this->mysqli->conn;
			$db->query($sql) or die ($db->error);
		}

	}

 ?>
