<?php
session_start();
require		"koneksi/koneksi.php";
require		"model/database.php";
include 	"model/m_pengguna.php";
include 	"model/m_aktivitas.php";
include 	"model/m_login.php";
$connection = new Database($host, $user, $pass, $database);
$pengguna 	= new Pengguna($connection);
$aktivitas 	= new Aktivitas($connection);
$login 		= new Login($connection);
?>
<?php include "halaman/1_halaman_utama.php"?>