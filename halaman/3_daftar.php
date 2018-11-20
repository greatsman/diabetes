<div class="register-box-body">
  <p class="login-box-msg">Silahkan Mengisi Form Berikut</p>
      <form action="" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="nama_pengguna" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        <div class="form-group has-feedback">
          <input type="text" name="tinggi" class="form-control" placeholder="Tinggi Badan (cm)" required>
        </div>
        <div class="form-group has-feedback">
          <input type="text" name="berat" class="form-control" placeholder="Berat Badan Badan (kg)" required>
        </div>
        <div class="form-group">
          <select class="form-control" name="jenis">
            <!-- <option>Pilih Jenis Kelamin</option> -->
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <select name="nilai_aktivitas" select class="form-control">
            <?php include "skrip/pilihan_aktivitas.php";?>
          </select>
          <span><a type="button" class="fa fa-info btn" data-toggle="modal" data-target="#modal-default"> Klik untuk detail </a></span>
        </div>
        <div class="form-group has-feedback">
          <input type="text" name="umur" class="form-control" placeholder="Umur saat ini (tahun)" required>
        </div>
        <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="row">
            <div class="col-xs-8">
              <label>
                <button type="submit" name="tambah" value="Simpan" class="btn btn-primary btn-block btn-flat">Daftar</button>
              </label>
            </div>
        </div>
     </form>
      <?php include "skrip/skrip_daftar.php"; ?>
    <a href="login" class="text-center">Sudah memiliki akun</a>
  </div>


<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detail Aktivitas</h4>
              </div>
              <div class="modal-body">
                 <p>1.Keadaan istirahat/bedres</p>
                 <p>2.Ringan (pegawai kantor, pegawai toko, guru, ahli hukum, ibu rumah tangga, dll) kebutuhan kalori basal +20%</p>
                 <p>3.Sedang (pegawai di industri ringan, mahasiswa, militer yang tidak perang, dll) kebutuhan kalori basal +30%</p>
                 <p>4.Berat (petani, buruh, atlet, militer dalam keadaan latihan, dll) kebutuhan kalori basal +40%</p>
                 <p>5.Sangat berat (tukang becak, tukang gali, dll) kebutuhan kalori basal +50%</p>




              </div>
            </div>
          </div>
</div>
