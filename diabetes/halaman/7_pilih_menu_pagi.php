<div class="col-md-6">
<div class="row">
  <div class="col-xs-3">
    <label class="control-label"> Pagi</label>
  </div>
</div>
<br>

<div class="row">
  <div class="col-xs-3">
    <label class="control-label">Karbohidrat</label>
  </div>
  <div class="col-xs-6">
    <select name="p1" class="form-control select2" style="width: 100%;">
       <?php
      $tampil     = $menu->tampil(golongan1);
      while($data = $tampil->fetch_object()){
      ?>
      <option value="<?=$data->nama_makanan; ?>"><?=$data->nama_makanan; ?></option>
      <?php } ?>
    </select>
  </div>
</div>
<br>

<div class="row">
  <div class="col-xs-3">
    <label class="control-label">Protein</label>
  </div>
  <div class="col-xs-6">
    <select name="p2" class="form-control select2" style="width: 100%;">
       <?php
      $tampil     = $menu->tampil(golongan2);
      while($data = $tampil->fetch_object()){
      ?>
      <option value="<?=$data->nama_makanan; ?>"><?=$data->nama_makanan; ?></option>
      <?php } ?>
    </select>
  </div>
</div>
<br>

<div class="row">
  <div class="col-xs-3">
    <label class="control-label">Sayuran</label>
  </div>
  <div class="col-xs-6">
    <select name="p3" class="form-control select2" style="width: 100%;">
       <?php
      $tampil     = $menu->tampil(golongan4);
      while($data = $tampil->fetch_object()){
      ?>
      <option value="<?=$data->nama_makanan; ?>"><?=$data->nama_makanan; ?></option>
      <?php } ?>
    </select>
  </div>
</div>
<br>

<div class="row">
  <div class="col-xs-3">
    <label class="control-label">Minyak</label>
  </div>
  <div class="col-xs-6">
    <select name="p4" class="form-control select2" style="width: 100%;">
       <?php
      $tampil     = $menu->tampil(golongan7);
      while($data = $tampil->fetch_object()){
      ?>
      <option value="<?=$data->nama_makanan; ?>"><?=$data->nama_makanan; ?></option>
      <?php } ?>
    </select>
  </div>
</div>
<br>

<div class="row">
  <div class="col-xs-3">
    <label class="control-label">Sayuran</label>
  </div>
  <div class="col-xs-6">
    <select name="p5" class="form-control select2" style="width: 100%;">
       <?php
      $tampil     = $menu->tampil(golongan6);
      while($data = $tampil->fetch_object()){
      ?>
      <option value="<?=$data->nama_makanan; ?>"><?=$data->nama_makanan; ?></option>
      <?php } ?>
    </select>
  </div>
</div>
<br>
</div>


