<div class="col-md-6">
<div class="row">
  <div class="col-xs-3">
    <label class="control-label">Pukul 16.00</label>
  </div>
</div>
<br>

<div class="row">
  <div class="col-xs-3">
    <label class="control-label">Buah</label>
  </div>
  <div class="col-xs-6">
    <select name="p161" class="form-control select2" style="width: 100%;">
       <?php
      $tampil     = $menu->tampil(golongan5);
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
    <label class="control-label">Gula</label>
  </div>
  <div class="col-xs-6">
    <select name="p162" class="form-control select2" style="width: 100%;">
       <?php
      $tampil     = $menu->tampil(golongan5);
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
    <label class="control-label">Karbohidrat</label>
  </div>
  <div class="col-xs-6">
    <select name="p163" class="form-control select2" style="width: 100%;">
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
    <label class="control-label">Karbohidrat</label>
  </div>
  <div class="col-xs-6">
    <select name="p164" class="form-control select2" style="width: 100%;">
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
    <label class="control-label">Minyak</label>
  </div>
  <div class="col-xs-6">
    <select name="p165" class="form-control select2" style="width: 100%;">
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
</div>