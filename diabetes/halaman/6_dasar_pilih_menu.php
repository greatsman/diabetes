<section class="content-header">
      <h1>
        Halaman
        <small>Pilih Menu Makan</small>
      </h1>
</section>

<section class="content container-fluid">
<div class="box box-default">
    <form action="" method="post" class="form-horizontal">
      <div class="box-body">
        <div class="col-md-12">
            <table>
              <tr>
                <td style="width: 130px"><label class="control-label">Nama Menu :</label></td>
                <td style="width: 820px"><input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Menu"></td>
              </tr>
            </table>
        </div>

               <?php 
               include '7_pilih_menu_pagi.php';
               include '8_pilih_menu_10.php';
               include '9_pilih_menu_siang.php';
               include '10_pilih_menu_16.php';
               include '11_pilih_menu_malam.php';
               
                ?>
        <div class="col-md-12">
         <table>
              <tr>
                <td style="width: 130px"><label class="control-label">Catatan :</label></td>
                <td style="width: 820px"><input name="catatan" type="text" class="form-control" placeholder="Berikan Catatan ...."></td>
              </tr>
             
          </table>
          <br>
          <table>
             <tr>
                <td style="width: 160px"><label class="control-label"></label></td>
                <td><button type="submit" name="tambah" value="Simpan" class="btn btn-primary btn-block btn-flat">Simpan</button></td>
              </tr>
          </table>
        </div>
      </div>
     </form>
      <?php include 'skrip/isi_menu.php'; ?>  
 </div>
</section>
