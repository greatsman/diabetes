<div class="box box-warning box-solid">
<div class="box-header">
	<h3 class="box-title">Riwayat Pilihan Menu Makan</h3>
</div>
<!-- /.box-header -->
<div class="table-responsive">
	<div class="box-body table-responsive no-padding">
	<table class="table table-hover">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Judul</th>
			<th>Catatan</th>
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
			<td><?=$data->tanggal_buat;  ?></td>
			<td><?=$data->nama_menu;  ?></td>
			<td><?=$data->catatan;  ?></td>
			<td>
				<span class="label label-danger">Hapus</span>
				<span class="label label-warning">Favorit</span>
			</td>
		</tr>
		<?php
		$no=+1  }?>
	</table>
	</div>
</div>
<!-- /.box-body -->
</div>
