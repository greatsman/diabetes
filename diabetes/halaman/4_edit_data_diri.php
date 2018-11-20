<div class="col-md-8">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Diri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post" class="form-horizontal">
              <?php
                $id_pengguna = $_SESSION['pengguna'];
                $baris= $pengguna->info_pribadi($id_pengguna);
                while($data = $baris->fetch_object()){
              ?>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tinggi</label>
                  <div class="col-sm-4">
                    <input type="text" name="tinggi" class="form-control" value="<?=$data->tinggi;  ?>">
                    <input type="hidden" name="jenis" class="form-control" value="<?=$data->jenis;  ?>">
                  </div>
                  <p class="col-sm-1 control-label"><b>cm</b></p>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Berat</label>

                  <div class="col-sm-4">
                    <input type="text" name="berat" class="form-control" value="<?=$data->berat;  ?>">
                  </div>
                  <p class="col-sm-1 control-label"><b>kg</b></p>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Umur</label>

                  <div class="col-sm-4">
                    <input type="text" name="umur" class="form-control" value="<?=$data->umur;  ?>">
                  </div>
                  <p class="col-sm-1 control-label"><b>Tahun</b></p>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pilih Aktivitas</label>
                  <div class="col-sm-4">
                  <select name="nilai_aktivitas" class="form-control">
                    <option value="<?=$data->nilai_aktivitas;  ?>"><?=$data->aktivitas;  ?></option>
                    <?php
                    $tampil= $aktivitas->sebagian($data->nilai_aktivitas);
                    while($data = $tampil->fetch_object()){
                    ?>
                    <option value="<?=$data->nilai; ?>"><?=$data->aktivitas; ?></option>
                    <?php } ?>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>

                  <div class="col-sm-2" >
                    <button type="submit" name= "update" value="perbarui" class="btn btn-info pull-left">Perbarui</button>
                  </div>
                  <div class="col-sm-1">
                    <button type="submit" name="batal" class="btn btn-danger pull-right">Cancel</button>
                  </div>
                </div>
              </div>
              <?php
              } ?>
            </form>
  </div>
<div>
<?php include 'skrip/edit_data_diri.php'; ?>