<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>List Makanan</h1>
<form method="get" action="<?= base_url('welcome/index') ?>">
    <div class="row mb-3">
        <input class="form-control" placeholder="cari makanan" type="text" name="search" id="search" />
    </div>
</form>
<?php
if (isset($search)) {
    echo "<h4 class='alert alert-success'>Hasil pencarian untuk : " . $search . "</h4>";
}
?>
<div class="row">
    <?php
    foreach ($records as $idx => $data) {
    ?>
        <div class="col-sm-4">
            <div class="card">
                <img src="<?= empty($data['gambar']) ? BASE_ASSETS . 'uploads/noimage.jpg' : BASE_ASSETS . 'uploads/' .
                                $data['gambar'] ?>" class="card-img-top" alt="<?= $data['nama'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama'] ?></h5>
                    <!-- <p class="card-text"><?= substr($data['sinopsis'],0,90) ?><u>....</u> </p> -->
                    <a href="<?=base_url("welcome/detail/{$data['id']}") ?>" class="btn btn-sm btn-primary">Detail</a></p>
                    <dl>
                        <dt>Nama Makanan</dt>
                        <dd><?= $data['nama'] ?></dd>
                        <dt>Harga</dt>
                        <dd><?= $data['harga'] ?></dd>
                        <dt>Stok</dt>
                        <dd><?= $data['stok'] ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php
include APPPATH . 'views/fragment/footer.php';
?>