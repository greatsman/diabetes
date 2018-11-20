
            <div class="box-header with-border">
              <i class="fa fa-user"></i>

              <h3 class="box-title">Data Diri</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-header with-border">
              <blockquote>
               <table>
                 <tr>
                   <td width="150">Nama</td>
                   <td width="20">:</td>
                   <td height="10"><?= $_SESSION['nama'];?></td>
                 </tr>
                 <tr>
                   <td width="150">Jenis Kelamin</td>
                   <td width="20">:</td>
                   <td height="10"><?=$data->jenis;  ?></td>
                 </tr>
                 <tr>
                   <td width="150">Tinggi Badan</td>
                   <td width="20">:</td>
                   <td height="10"><?=$data->tinggi;  ?> cm</td>
                 </tr>
                  <tr>
                   <td width="150">Berat Badan</td>
                   <td width="20">:</td>
                   <td height="10"><?=$data->berat;  ?> kg  (BBI : <?=$data->BBI;?> kg)</td>
                 </tr>
                  <tr>
                   <td width="150">Tingkat Aktivitas</td>
                   <td width="20">:</td>
                   <td height="10"><?=$data->aktivitas;  ?></td>
                 </tr>
               </table>
              </blockquote>
            </div>
            