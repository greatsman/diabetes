<?php
  if(@$_POST['tambah']){
    $id_pengguna   = $_SESSION['pengguna'];    
    $nama_menu  = $_POST['nama'];
    $protein       = $pengguna->cek_protein($_SESSION['protein']);
    $kalori        = $pengguna->cek_kalori($_SESSION['energi']);
    $tgl           = date('Y-m-d');
    $catatan       = $_POST['catatan'];
    


    $kelas_protein = $menu->kelas_protein($protein);

    $p1_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p1');
    $p2_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p2');
    $p3_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p3');
    $p4_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p4');
    $p5_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p5');
    $p101_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p101');
    $p102_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p102');
    $p103_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p103');
    $p104_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p104');
    $s1_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'s1');
    $s2_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'s2');
    $s3_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'s3');
    $s4_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'s4');
    $s5_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'s5');
    $p161_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p161');
    $p162_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p162');
    $p163_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p163');
    $p164_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p164');
    $p165_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'p165');
    $m1_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'m1');
    $m2_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'m2');
    $m3_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'m3');
    $m4_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'m4');
    $m5_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'m5');
    $m6_pengguna   = $menu->kelas_kalori($kelas_protein,$kalori,'m6');


    
    $p1 =  $_POST['p1'];
    $p2 =  $_POST['p2'];
    $p3 =  $_POST['p3'];
    $p4 =  $_POST['p4'];
    $p5 =  $_POST['p5'];
    $p101 =  $_POST['p101'];
    $p102 =  $_POST['p102'];
    $p103 =  $_POST['p103'];
    $p104 =  $_POST['p104'];
    $s1 =  $_POST['s1'];
    $s2 =  $_POST['s2'];
    $s3 =  $_POST['s3'];
    $s4 =  $_POST['s4'];
    $s5 =  $_POST['s5'];
    $p161 =  $_POST['p161'];
    $p162 =  $_POST['p162'];
    $p163 =  $_POST['p163'];
    $p164 =  $_POST['p164'];
    $p165 =  $_POST['p165'];
    $m1 =  $_POST['m1'];
    $m2 =  $_POST['m2'];
    $m3 =  $_POST['m3'];
    $m4 =  $_POST['m4'];
    $m5 =  $_POST['m5'];
    $m6 =  $_POST['m6'];


    $p1_nilai =  $menu->nilai_makanan('golongan1',$p1);
    $p2_nilai =  $menu->nilai_makanan('golongan2',$p2);
    $p3_nilai =  $menu->nilai_makanan('golongan4',$p3);
    $p4_nilai =  $menu->nilai_makanan('golongan7',$p4);
    $p5_nilai =  $menu->nilai_makanan('golongan6',$p5);
    $p101_nilai =  $menu->nilai_makanan('golongan5',$p101);
    $p102_nilai =  $menu->nilai_makanan('golongan5',$p102);
    $p103_nilai =  $menu->nilai_makanan('golongan1',$p103);
    $p104_nilai =  $menu->nilai_makanan('golongan7',$p104);
    $s1_nilai =  $menu->nilai_makanan('golongan1',$s1);
    $s2_nilai =  $menu->nilai_makanan('golongan2',$s2);
    $s3_nilai =  $menu->nilai_makanan('golongan4',$s3);
    $s4_nilai =  $menu->nilai_makanan('golongan5',$s4);
    $s5_nilai =  $menu->nilai_makanan('golongan7',$s5);
    $p161_nilai =  $menu->nilai_makanan('golongan5',$p161);
    $p162_nilai =  $menu->nilai_makanan('golongan5',$p162);
    $p163_nilai =  $menu->nilai_makanan('golongan1',$p163);
    $p164_nilai =  $menu->nilai_makanan('golongan1',$p164);
    $p165_nilai =  $menu->nilai_makanan('golongan7',$p165);
    $m1_nilai =  $menu->nilai_makanan('golongan1',$m1);
    $m2_nilai =  $menu->nilai_makanan('golongan2',$m2);
    $m3_nilai =  $menu->nilai_makanan('golongan4',$m3);
    $m4_nilai =  $menu->nilai_makanan('golongan5',$m4);
    $m5_nilai =  $menu->nilai_makanan('golongan7',$m5);
    $m6_nilai =  $menu->nilai_makanan('golongan6',$m6);

    $p1_nilai_berat =  $menu->nilai_berat('golongan1',$p1);
    $p2_nilai_berat =  $menu->nilai_berat('golongan2',$p2);
    $p3_nilai_berat =  $menu->nilai_berat('golongan4',$p3);
    $p4_nilai_berat =  $menu->nilai_berat('golongan7',$p4);
    $p5_nilai_berat =  $menu->nilai_berat('golongan6',$p5);
    $p101_nilai_berat =  $menu->nilai_berat('golongan5',$p101);
    $p102_nilai_berat =  $menu->nilai_berat('golongan5',$p102);
    $p103_nilai_berat =  $menu->nilai_berat('golongan1',$p103);
    $p104_nilai_berat =  $menu->nilai_berat('golongan7',$p104);
    $s1_nilai_berat =  $menu->nilai_berat('golongan1',$s1);
    $s2_nilai_berat =  $menu->nilai_berat('golongan2',$s2);
    $s3_nilai_berat =  $menu->nilai_berat('golongan4',$s3);
    $s4_nilai_berat =  $menu->nilai_berat('golongan5',$s4);
    $s5_nilai_berat =  $menu->nilai_berat('golongan7',$s5);
    $p161_nilai_berat =  $menu->nilai_berat('golongan5',$p161);
    $p162_nilai_berat =  $menu->nilai_berat('golongan5',$p162);
    $p163_nilai_berat =  $menu->nilai_berat('golongan1',$p163);
    $p164_nilai_berat =  $menu->nilai_berat('golongan1',$p164);
    $p165_nilai_berat =  $menu->nilai_berat('golongan7',$p165);
    $m1_nilai_berat =  $menu->nilai_berat('golongan1',$m1);
    $m2_nilai_berat =  $menu->nilai_berat('golongan2',$m2);
    $m3_nilai_berat =  $menu->nilai_berat('golongan4',$m3);
    $m4_nilai_berat =  $menu->nilai_berat('golongan5',$m4);
    $m5_nilai_berat =  $menu->nilai_berat('golongan7',$m5);
    $m6_nilai_berat =  $menu->nilai_berat('golongan6',$m6);


    $p1_akhir = $p1_nilai*$p1_pengguna;
    $p2_akhir = $p2_nilai*$p2_pengguna;
    $p3_akhir = $p3_nilai*$p3_pengguna;
    $p4_akhir = $p4_nilai*$p4_pengguna;
    $p5_akhir = $p5_nilai*$p5_pengguna;
    $p101_akhir = $p101_nilai*$p101_pengguna;
    $p102_akhir = $p102_nilai*$p102_pengguna;
    $p103_akhir = $p103_nilai*$p103_pengguna;
    $p104_akhir = $p104_nilai*$p104_pengguna;
    $s1_akhir = $s1_nilai*$s1_pengguna;
    $s2_akhir = $s2_nilai*$s2_pengguna;
    $s3_akhir = $s3_nilai*$s3_pengguna;
    $s4_akhir = $s4_nilai*$s4_pengguna;
    $s5_akhir = $s5_nilai*$s5_pengguna;
    $p161_akhir = $p161_nilai*$p161_pengguna;
    $p162_akhir = $p162_nilai*$p162_pengguna;
    $p163_akhir = $p163_nilai*$p163_pengguna;
    $p164_akhir = $p164_nilai*$p164_pengguna;
    $p165_akhir = $p165_nilai*$p165_pengguna;
    $m1_akhir = $m1_nilai*$m1_pengguna;
    $m2_akhir = $m2_nilai*$m2_pengguna;
    $m3_akhir = $m3_nilai*$m3_pengguna;
    $m4_akhir = $m4_nilai*$m4_pengguna;
    $m5_akhir = $m5_nilai*$m5_pengguna;
    $m6_akhir = $m5_nilai*$m6_pengguna;

    $p1_berat = $p1_nilai_berat*$p1_pengguna;
    $p2_berat = $p2_nilai_berat*$p2_pengguna;
    $p3_berat = $p3_nilai_berat*$p3_pengguna;
    $p4_berat = $p4_nilai_berat*$p4_pengguna;
    $p5_berat = $p5_nilai_berat*$p5_pengguna;
    $p101_berat = $p101_nilai_berat*$p101_pengguna;
    $p102_berat = $p102_nilai_berat*$p102_pengguna;
    $p103_berat = $p103_nilai_berat*$p103_pengguna;
    $p104_berat = $p104_nilai_berat*$p104_pengguna;
    $s1_berat = $s1_nilai_berat*$s1_pengguna;
    $s2_berat = $s2_nilai_berat*$s2_pengguna;
    $s3_berat = $s3_nilai_berat*$s3_pengguna;
    $s4_berat = $s4_nilai_berat*$s4_pengguna;
    $s5_berat = $s5_nilai_berat*$s5_pengguna;
    $p161_berat = $p161_nilai_berat*$p161_pengguna;
    $p162_berat = $p162_nilai_berat*$p162_pengguna;
    $p163_berat = $p163_nilai_berat*$p163_pengguna;
    $p164_berat = $p164_nilai_berat*$p164_pengguna;
    $p165_berat = $p165_nilai_berat*$p165_pengguna;
    $m1_berat = $m1_nilai_berat*$m1_pengguna;
    $m2_berat = $m2_nilai_berat*$m2_pengguna;
    $m3_berat = $m3_nilai_berat*$m3_pengguna;
    $m4_berat = $m4_nilai_berat*$m4_pengguna;
    $m5_berat = $m5_nilai_berat*$m5_pengguna;
    $m6_berat = $m5_nilai_berat*$m6_pengguna;


    $menu->tambah($nama_menu,
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
                  $tgl);


     echo"<script>alert('Menu anda berhasil disimpan');</script>";
     echo"<script>window.location.href='riwayat' ;</script>";
   }
?>
