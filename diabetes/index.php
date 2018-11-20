<?php
ob_start();
session_start();
if (@$_SESSION['pengguna']) {
require('../koneksi/koneksi.php');
require('../model/database.php');
require('../model/m_pengguna.php');
require('../model/m_aktivitas.php');
require('../model/m_menu.php');
$connection = new Database($host, $user, $pass, $database);
$pengguna = new Pengguna($connection);
$aktivitas = new Aktivitas($connection);
$menu = new Menu($connection);
?>
<?php include 'halaman/1_isi_index.php'; ?>
<?php
} else {
echo"<script>window.location='../';</script>";
}
?>
