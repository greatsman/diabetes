<?php
  if(@$_POST['tambah']){
      $nama_pengguna   = $_POST['nama_pengguna'];
      $tinggi          = $_POST['tinggi'];
      $berat           = $_POST['berat'];
      $jenis           = $_POST['jenis'];
      $umur            = $_POST['umur'];
      $nilai_aktivitas = $_POST['nilai_aktivitas'];
      $email           = $_POST['email'];
      $password        = $_POST['password'];

      $lmt             = $berat/pow(($tinggi/100),2);
      if ($jenis=='Laki-laki') {
          if ($tinggi>160) {
              $BBI         = 90*($tinggi-100)/100;
              $BMR         = 30*$BBI;
              $k_aktivitas = ($nilai_aktivitas/10)*$BMR;
                            }
          else {
              $BBI         = $tinggi-100;
              $BMR         = 30*$BBI;
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

      if     ($umur<=40) {
              $k_umur = $BMR*0;
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

      if     ($lmt<18.5) {
              $k_tubuh= $BMR*(20/100);
                     }
      elseif ($lmt>=18.5 && $lmt<=22.9) {
              $k_tubuh= $BMR*(0/100);
                      }
      else {
              $k_tubuh= $BMR*(-20/100);
            }

      $energi     = ($BMR+$k_aktivitas)-$k_umur+$k_tubuh;
      $protein    = ($berat*8/10);
      
      $cek_daftar = $pengguna->cek_daftar($email);
      $cek        = mysqli_num_rows($cek_daftar);
      if ($cek==0 ){
                    $pengguna->tambah($nama_pengguna,
                                      $tinggi,$berat,
                                      $jenis,
                                      $umur,
                                      $nilai_aktivitas,
                                      $k_aktivitas,
                                      $k_umur,$k_tubuh,
                                      $BBI,
                                      $BMR,
                                      $energi,
                                      $protein,
                                      $email,
                                      $password);
                      echo"<script>alert('Pendaftaran berhasil');</script>";
                      echo"<script>window.location.href='login';</script>";
                    }
      else {
                        echo"<script>alert('Pendaftaran gagal email Anda Sudah Digunakan');</script>";
            }
            }
?>
