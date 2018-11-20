 <?php
    $id_pengguna = $_SESSION['pengguna'];
    $baris= $pengguna->info_kesehatan($id_pengguna);
    while($data = $baris->fetch_object()){
    ?>
<?php include 'halaman/5_kolom_informasi_kesehatan.php'; ?>
 <?php
  } ?>
