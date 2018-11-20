<option value="">--Pilih Aktivitas--</option>
<?php
$tampil= $aktivitas->tampil();
while($data = $tampil->fetch_object()){
?>
<option value="<?=$data->nilai; ?>"><?=$data->aktivitas; ?></option>
<?php } ?>
