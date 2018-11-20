<?php
if(@$_POST['login']){
$email     = $connection->conn->real_escape_string($_POST['email']);
$password  = $connection->conn->real_escape_string($_POST['password']);
$tampil    = $login->pengguna($email,$password);
$data      = $tampil->fetch_object();
$cek       = mysqli_num_rows($tampil);
      if ($cek > 0) {
            $cek_protein   = $login->cek_protein($data->protein);
            $cek_energi    = $login->cek_kalori($data->energi);
            $kelas_protein = $login->kelas_protein($cek_protein);
            $grafik        = $login->grafik($kelas_protein,$cek_energi);
            $dgrafik       = $grafik->fetch_object();
            $_SESSION['pengguna']   = $data->id_pengguna;
            $_SESSION['protein']    = $data->protein;
            $_SESSION['energi']     = $data->energi;
            $_SESSION['nama']       = $data->nama_pengguna;
            $_SESSION['genergi']    = $dgrafik->energi;
            $_SESSION['gprotein']    = $dgrafik->protein;
            $_SESSION['gkarbohidrat']    = $dgrafik->karbohidrat;
            $_SESSION['glemak']     = $dgrafik->lemak;

                  echo"<script>window.location='diabetes';</script>";
                    }
      else
                    {
                  echo"<script>alert('Email anda tidak terdfatar atau kata sandi anda salah')</script>";
                    }
}
?>
