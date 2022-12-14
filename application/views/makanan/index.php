<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>List makanan</h1>
<a class="btn btn-success btn-sm" href="<?= base_url("makanan/form")?>">Tambah</a>
<table class="table table-striped"> 
    <tr>
        <th>nama</th>
        <th>harga</th>
        <th>stok</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['harga'] ?></td>
            <td><?= $data['stok'] ?></td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?= base_url("makanan/detail/{$data['id']}")?>">Detail</a>
                <a class="btn btn-dark btn-sm" href="<?= base_url("makanan/form/{$data['id']}")?>">Edit</a>
                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("makanan/hapus/{$data['id']}")?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>