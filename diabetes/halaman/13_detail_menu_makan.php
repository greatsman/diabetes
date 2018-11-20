    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-cutlery"></i> Detail Menu Makanan
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            <?php 
             $baris =$menu->detail_menu($_GET['id']);
             $data  = $baris->fetch_object();
             {
            ?>
            <table>
              <tr>
                <td width="100">
                 <strong>Nama Pasien</strong>
                </td>
                <td width="20">:</td>
                <td><?=$_SESSION['nama']; ?></td>
              </tr>
              <tr>
                <td width="80">
                 <strong>Nama Menu</strong>
                </td>
                <td width="20">:</td>
                <td><?=$data->nama_menu;  ?></td>
              </tr>
              <tr>
                <td width="80">
                 <strong>Catatan</strong>
                </td>
                <td width="20">:</td>
                <td><?=$data->catatan;  ?></td>
              </tr>
            </table>
          <?php } ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
        </div>
        <div class="col-sm-4 invoice-col">
          <table>
          <tr>
            <td width="100">
              <strong>Tanggal</strong>
            </td>
            <td width="20">:</td>
              <td><?= date('d/m/Y');  ?></td>
          </tr>
          <tr>
              <td width="100">
                <strong>Kalori Tubuh</strong>
              </td>
              <td width="20">:</td>
              <td><?=$_SESSION['energi']; ?> KKAL</td>
          </tr>
          <tr>
              <td width="100">
                <strong>Protein</strong>
              </td>
              <td width="20">:</td>
              <td><?=$_SESSION['protein']; ?> g</td>
          </tr>
          <tr>
              <td width="100">
                <strong>Jenis Diet</strong>
              </td>
              <td width="20">:</td>
              <td><?=$pengguna->cek_kalori($_SESSION['energi']); ?> KKAL</td>
          </tr>
          </table>
        </div>
      </div>

      <br>
      <hr>
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Waktu</th>
              <th>Bahan Makanan</th>
              <th>Urt</th>
              <th>Berat</th>
            </tr>
            </thead>
            <tbody>
            <?php 
             $baris =$menu->detail_menu($_GET['id']);
             $data  = $baris->fetch_object();
             {
            ?>
            <tr>
              <td>Pagi</td>
              <td><?=$data->p1;  ?></td>
              <td><?=$data->p1_nilai;  ?> <?=$menu->print_menu('golongan1',$data->p1); ?>   
              </td>
              <td><?=$menu->print_berat2('p1_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p2;  ?></td>
              <td><?=$data->p2_nilai; ?> <?=$menu->print_menu('golongan2',$data->p2); ?>
              </td>
              <td><?=$menu->print_berat2('p2_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p3;  ?></td>
              <td><?=$data->p3_nilai;  ?> <?=$menu->print_menu('golongan4',$data->p3); ?>
              </td>
              <td><?=$menu->print_berat2('p3_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p4;  ?></td>
              <td><?=$data->p4_nilai;  ?> <?=$menu->print_menu('golongan7',$data->p4); ?>
              </td>
              <td><?=$menu->print_berat2('p4_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p5  ?></td>
              <td><?=$data->p5_nilai  ?> <?=$menu->print_menu('golongan6',$data->p5); ?>
              </td>
              <td><?=$menu->print_berat2('p5_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td>Pukul 10.00</td>
              <td><?=$data->p101  ?></td>
              <td><?=$data->p101_nilai  ?> <?=$menu->print_menu('golongan5',$data->p101); ?></td>
              <td><?=$menu->print_berat2('p101_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p102;  ?></td>
              <td><?=$data->p102_nilai  ?> <?=$menu->print_menu('golongan5',$data->p102); ?></td>
              <td><?=$menu->print_berat2('p102_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p103;  ?></td>
              <td><?=$data->p103_nilai  ?> <?=$menu->print_menu('golongan1',$data->p103); ?></td>
              <td><?=$menu->print_berat2('p103_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p104;  ?></td>
              <td><?=$data->p104_nilai  ?> <?=$menu->print_menu('golongan7',$data->p104); ?></td>
              <td><?=$menu->print_berat2('p104_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td>Siang</td>
              <td><?=$data->s1;  ?></td>
              <td><?=$data->s1_nilai  ?> <?=$menu->print_menu('golongan1',$data->s1); ?></td>
              <td><?=$menu->print_berat2('s1_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->s2;  ?></td>
              <td><?=$data->s2_nilai  ?> <?=$menu->print_menu('golongan2',$data->s2); ?></td>
              <td><?=$menu->print_berat2('s2_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->s3;  ?></td>
              <td><?=$data->s3_nilai  ?> <?=$menu->print_menu('golongan4',$data->s3); ?></td>
              <td><?=$menu->print_berat2('s3_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->s4;  ?></td>
              <td><?=$data->s4_nilai  ?> <?=$menu->print_menu('golongan5',$data->s4); ?></td>
              <td><?=$menu->print_berat2('s4_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->s5;  ?></td>
              <td><?=$data->s5_nilai  ?> <?=$menu->print_menu('golongan7',$data->s5); ?></td>
              <td><?=$menu->print_berat2('s5_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td>Pukul 16.00</td>
              <td><?=$data->p161  ?></td>
              <td><?=$data->p161_nilai  ?> <?=$menu->print_menu('golongan5',$data->p161); ?></td>
              <td><?=$menu->print_berat2('p161_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p162  ?></td>
              <td><?=$data->p162_nilai  ?> <?=$menu->print_menu('golongan5',$data->p162); ?></td>
              <td><?=$menu->print_berat2('p162_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p163  ?></td>
              <td><?=$data->p163_nilai  ?> <?=$menu->print_menu('golongan1',$data->p163); ?></td>
              <td><?=$menu->print_berat2('p162_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p164  ?></td>
              <td><?=$data->p164_nilai  ?> <?=$menu->print_menu('golongan1',$data->p164); ?></td>
              <td><?=$menu->print_berat2('p164_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->p165  ?></td>
              <td><?=$data->p165_nilai  ?> <?=$menu->print_menu('golongan7',$data->p165); ?></td>
              <td><?=$menu->print_berat2('p165_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td>Malam</td>
              <td><?=$data->m1  ?></td>
              <td><?=$data->m1_nilai  ?> <?=$menu->print_menu('golongan1',$data->m1); ?></td>
              <td><?=$menu->print_berat2('m1_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->m2  ?></td>
              <td><?=$data->m2_nilai  ?> <?=$menu->print_menu('golongan2',$data->m2); ?></td>
              <td><?=$menu->print_berat2('m2_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->m3  ?></td>
              <td><?=$data->m3_nilai  ?> <?=$menu->print_menu('golongan4',$data->m3); ?></td>
              <td><?=$menu->print_berat2('m3_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->m4  ?></td>
              <td><?=$data->m4_nilai  ?> <?=$menu->print_menu('golongan5',$data->m4); ?></td>
              <td><?=$menu->print_berat2('m4_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->m5  ?></td>
              <td><?=$data->m5_nilai  ?> <?=$menu->print_menu('golongan7',$data->m5); ?></td>
              <td><?=$menu->print_berat2('m5_berat',$_GET['id']) ?> g</td>
            </tr>
            <tr>
              <td></td>
              <td><?=$data->m6  ?></td>
              <td><?=$data->m6_nilai  ?> <?=$menu->print_menu('golongan6',$data->m6); ?></td>
              <td><?=$menu->print_berat2('m6_berat',$_GET['id']) ?> g</td>
            </tr>
            
             <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button onclick="window.print();" href="14_isi_detail_menu.php" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
        </div>
      </div>
 </section>