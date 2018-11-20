<?php
  $kalori        = $pengguna->cek_kalori($_SESSION['energi']);
  $id_pengguna = $_SESSION['pengguna'];
  $baris= $pengguna->info_pribadi($id_pengguna);
  while($data = $baris->fetch_object()){
?>
<?php include 'halaman/3_kolom_data_diri.php'; ?>
<?php
} ?>