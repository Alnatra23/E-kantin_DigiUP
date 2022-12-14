<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('kantin/save') ?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
    <div>
        <label></label>
        <div>
            <h3>Tambah/Ubah Kantin</h3>
        </div>
    </div>
    <div class="row mb-3">
        <label class="form-label">Nama Kantin</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" name="nama" id="nama" value="<?= $nama ?>" required />
        </div>
    </div>

    <!-- <div class="row mb-3">
        <label class="form-label">Alamat</label>
        <div class="col-sm-6">
            <textarea class="form-control" type="text" name="alamat" id="alamat">
<?= $alamat ?>
</textarea> -->
        <!-- </div>
    </div> -->

    <div class="row mb-3">
        <label class="form-label">Telpon</label>
        <div class="col-sm-6">
            <textarea class="form-control" type="text" name="telpon" id="telpon">
<?= $telpon ?>
</textarea>
        </div>
    </div>

    
</input>
        </div>
    </div>

    <!-- <div class="row mb-3">
        <label class="form-label">Email</label>
        <div class="col-sm-6">
            <textarea class="form-control" type="text" name="email" id="email">
<?= $email ?>
</textarea>
        </div>
    </div> -->

    <div>
        <input class="btn btn-dark btn-sm" type="button" value="Cancel" onclick="history.back()" />
        <input class="btn btn-primary btn-sm" type="submit" value="Simpan" />
    </div>

</form>