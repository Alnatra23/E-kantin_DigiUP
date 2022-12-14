<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Makanan</h1>
<dl>

  <dt>Nama</dt>
  <dd><?= $nama ?></dd>

  <dt>Harga</dt>
  <dd><?= $harga ?></dd>

  <dt>Stok</dt>
  <dd><?= $stok ?></dd>

  <dt>Gambar</dt>
  <dd><img src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg' : BASE_ASSETS . 'uploads/' . $gambar ?>" class="card-img-top" alt="<?= $gambar ?>"></dd>
</dl>

<a class="btn btn-primary btn-sm" href='#' onclick="history.back()">Back</a>