<div class="box-header with-border">
              <i class="fa fa-child"></i>
              <h3 class="box-title">Informasi Kesehatan</h3>
            </div>
            <div class="box-body">
            <div class="col-md-6">
             <canvas id="pieChart" style="height:150px"></canvas>
              <br>
           
             
              
              
               <p align="center">Grafik Kebutuhan Jenis Diet <?=$pengguna->cek_kalori($data->energi); ?> KKAL</p>
            </div>
            <div class="col-md-4">
             <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-stethoscope"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Hasil Perhitungan Energi</span>
              <span><h3><?=$data->energi; ?> kkal</h3></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-stethoscope"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Hasil Perhitungan Protein</span>
              <span><h3><?=$data->protein; ?> g</h3></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

          </div>