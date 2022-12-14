<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('makanan/save') ?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
    <div>
        <label></label>
        <div>
            <h3>Tambah/Ubah Makanan</h3>
        </div>
    </div>
    <div>
    <label>kantin</label>
    <select name="id_kantin" id="id_kantin">
        <?php
         // $idx = row ke-x, $row => datanya
          foreach($kantins as $idx => $row){
              ?>
              <option value="<?= $row['id'] ?>" 
              <?= $id_kantin == $row['id'] ? 'selected' : '' ?>> 
              <?= $row['nama'] ?></option>
              <?php
          }
        ?>
    </select>
</div>

    <div class="row mb-3">
        <label class="form-label">nama</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" name="nama" id="nama" value="<?= $nama ?>" required />
        </div>
    </div>

    <div class="row mb-3">
        <label class="form-label">stok</label>
        <div class="col-sm-6">
            <input class="form-control" type="number" name="stok" id="stok" value="<?= $stok ?>" required />
        </div>
    </div>

    <div class="row mb-3">
        <label class="form-label">harga</label>
        <div class="col-sm-6">
            <input class="form-control" type="number" name="harga" id="harga" value="<?= $harga ?>" required />
        </div>
    </div>

    <div class="row mb-3">
        <label class="form-label">Gambar</label>
        <div class="col-sm-6">
            <input class="form-control" type="file" name="gambar" id="gambar" value="<?= $gambar ?>" required />
        </div>
    <!-- 
<div class="row mb-3">
<label class="form-label">Jumlah Halaman</label>
<div class="col-sm-6">
<input class="form-control" type="number" name="jumlah_halaman" id="jumlah_halaman" value="<?= $jumlah_halaman ?>" required/>
</div>
</div>

<div class="row mb-3">
<label class="form-label">Sinopsis</label>
<div class="col-sm-6">
<textarea class="form-control" type="text" name="sinopsis" id="sinopsis">
<?= $sinopsis ?>
</textarea>
</div>
</div>
<div class="row mb-3">
<label class="form-label">Tanggal Rilis</label>
<div class="col-sm-6">
<input class="form-control" type="date" name="tanggal_rilis" id="tanggal_rilis" value="<?= $tanggal_rilis ?>" required/>
</div>
</div> -->

    <div>
        <input class="btn btn-dark btn-sm" type="button" value="Cancel" onclick="history.back()" />
        <input class="btn btn-primary btn-sm" type="submit" value="Simpan" />
    </div>

</form>