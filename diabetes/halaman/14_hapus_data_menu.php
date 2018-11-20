    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
           Anda akan menghapus data 
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
<form action="" method="post" class="form-horizontal">
      <div class="row invoice-info">
      <table>
      <tr>
        <td width="100">
        </td>
        <td width="60">
          <button type="submit" name="ya" value="ya" class="btn btn-success btn-block btn-flat">
          Ya
          </button>
        </td>
        <td width="50">
        </td>
        <td width="60">
          <button type="submit" name="tidak" value="tidak" class="btn btn-danger btn-block btn-flat">
          Tidak
          </button>
        </td>
      </tr>
      </table>
      </div>
</form> 
<?php
  if(@$_POST['ya']){
    $menu->hapus($_GET['id']); 
     echo"<script>alert('Menu anda berhasil dihapus');</script>";
     echo"<script>window.location.href='riwayat' ;</script>";
   }
  elseif (@$_POST['tidak']) {
    echo"<script>window.location.href='riwayat' ;</script>";
  }
?>

 </section>