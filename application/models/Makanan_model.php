<?php
require_once 'Base_model.php';

class Makanan_model extends Base_Model{
    //nama tabel
    
    var $table = "tbl_makanan";
    public function search($kw){
        return $this->db->query("SELECT tbl_makanan.*,tbl_kantin.nama as nama_kantin
        FROM tbl_makanan
        INNER JOIN tbl_kantin ON tbl_kantin.id = tbl_makanan.id_kantin WHERE tbl_makanan.nama LIKE '%$kw%'") ->result_array();
        }
}
