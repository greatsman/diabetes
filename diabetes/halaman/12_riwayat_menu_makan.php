<section class="content-header">
      <h1>
        Halaman
        <small>Pilih Menu Makan</small>
      </h1>
</section>
<section class="content">
  <form action="" method="post" class="form-horizontal">
	 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th width="50">No</th>
				  <th width="150">Tanggal</th>
			      <th width="300">Judul</th>
			      <th width="600">Catatan</th>
			      <th>Pilihan</th>
                </tr>
                <?php 
					         $no= 1;
					         $id_pengguna = $_SESSION['pengguna'];
    				       $baris		 = $menu->riwayat_menu($id_pengguna);
    				       while($data  = $baris->fetch_object()){
				        ?>
				<tr>		
				  <td><?=$no; ?></td>
			      <td><?=date('d-M-Y',strtotime($data->tanggal_buat));  ?></td>
			      <td><?=$data->nama_menu;  ?></td>
			      <td><?=$data->catatan;  ?></td>
			      <td>
			         <span>
                    <a href="detail&id<?=$data->id_menu;  ?>" class="label label-info">
                      Detail
                    </a>
                </span>
                <span>
                    <a href="hapus&id<?=$data->id_menu;  ?>" class="label label-danger">
                      Hapus
                    </a>
                </span>
			      </td>
		    </tr>
		     <?php $no++;  }?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </form>
	
</section>