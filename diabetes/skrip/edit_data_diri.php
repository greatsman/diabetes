<?php
  if(@$_POST['update']){
  $id_pengguna         = $_SESSION['pengguna'];
  $tinggi              = $_POST['tinggi'];
  $jenis               = $connection->conn->real_escape_string($_POST['jenis']);
  $berat               = $_POST['berat'];
  $umur                = $_POST['umur'];
  $nilai_aktivitas     = $_POST['nilai_aktivitas'];
  $lmt= $berat/pow(($tinggi/100),2);

  if ($jenis=='Laki-laki') {
  if ($tinggi>160) {
  $BBI= 90*($tinggi-100)/100;
  $BMR= 30*$BBI;
  $k_aktivitas = ($nilai_aktivitas/10)*$BMR;
  }
  else {
  $BBI= $tinggi-100;
  $BMR= 30*$BBI;
  $k_aktivitas = ($nilai_aktivitas/10)*$BMR;
  }
  }
  else {
  if ($tinggi>150) {
  $BBI= 90*($tinggi-100)/100;
  $BMR= 20*$BBI;
  $k_aktivitas = ($nilai_aktivitas/10)*$BMR;
  }
  else {
  $BBI= $tinggi-100;
  $BMR= 20*$BBI;
  $k_aktivitas = ($nilai_aktivitas/10)*$BMR;
  }
  }

  if ($umur<=40) {
  $k_umur= $BMR*0;
  }
  elseif ($umur>40 && $umur<=59) {
  $k_umur= $BMR*(5/100);
  }
  elseif ($umur>60 && $umur<=69) {
  $k_umur= $BMR*(10/100);
  }
  else {
  $k_umur= $BMR*(20/100);
  }

  if ($lmt<18.5) {
    $k_tubuh= $BMR*(20/100);
    }
  elseif ($lmt>=18.5 && $lmt<=22.9) {
  $k_tubuh= $BMR*(0/100);
  }
  else {
  $k_tubuh= $BMR*(-20/100);
  }

  $energi               = ($BMR+$k_aktivitas)-$k_umur+$k_tubuh;
  $protein              = ($berat*8/10);
  $_SESSION['energi']   = $energi;
  $_SESSION['protein']  = $protein;

  $pengguna->edit("UPDATE pengguna SET
                   tinggi             = '$tinggi',
                   berat              = '$berat',
                   umur               = '$umur',
                   nilai_aktivitas    = '$nilai_aktivitas',
                   k_aktivitas        = '$k_aktivitas',
                   k_umur             = '$k_umur',
                   k_tubuh            = '$k_tubuh',
                   BBI                = '$BBI',
                   BMR                = '$BMR',
                   energi             = '$energi',
                   protein            = '$protein'
                   WHERE id_pengguna  = '$id_pengguna'");


  echo"<script>alert('Data anda berhasil diganti;');</script>";
  echo"<script>window.location.href='data';</script>";

  }
  ?>
