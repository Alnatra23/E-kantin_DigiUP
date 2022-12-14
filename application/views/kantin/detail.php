<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Kantin</h1>
<dl>
  <dt>Nama Kantin</dt>
  <dd><?= $nama ?></dd>

  <!-- <dt>Alamat</dt>
  <dd><?= $alamat ?></dd> -->

  <dt>Telpon</dt>
  <dd><?= $telpon ?></dd>

  <!-- <dt>Email</dt>
  <dd><?= $email ?></dd> -->
</dl>

<a class="btn btn-dark btn-sm" href='#' onclick="history.back()">Back</a>