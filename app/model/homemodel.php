<?php
    class homemodel extends dmodel{
        public function __construct()
        {
            parent::__construct();
        }
        public function select_sanpham($table_danhmuc, $table_sanpham, $table_loaidm){
            $sql = "SELECT * FROM $table_danhmuc, $table_sanpham, $table_loaidm WHERE $table_danhmuc.iddm = $table_sanpham.iddm 
                AND $table_sanpham.idloaidm = $table_loaidm.idloaidm ORDER BY $table_sanpham.idsp ASC";
            return  $this->db->select($sql);
        }
        public function select_loaidm($table_danhmuc, $table_loaidm){
            $sql = "SELECT * FROM $table_danhmuc, $table_loaidm WHERE $table_loaidm.iddm = $table_danhmuc.iddm ORDER BY $table_loaidm.iddm ASC";
            return  $this->db->select($sql);
        }
        public function select_danhmuc_home($table_danhmuc){
            $sql = "SELECT * FROM $table_danhmuc LIMIT 2";
            return  $this->db->select($sql);
        }
        public function danhmuc_home($danhmuc){
            $sql = "SELECT * FROM $danhmuc";
            return  $this->db->select($sql);
        }
        public function loaidm_home($loaidm){
            $sql = "SELECT * FROM $loaidm WHERE 1";
            return  $this->db->select($sql);
        }
        public function loaidm_theo_id($danhmuc, $loaidm, $id){
            $sql = "SELECT * FROM $danhmuc, $loaidm WHERE $loaidm.iddm = $danhmuc.iddm AND $loaidm.iddm=$id";
            return  $this->db->select($sql);
        }
        public function sanpham_home($sanpham){
            $sql = "SELECT * FROM $sanpham";
            return  $this->db->select($sql);
        }
        public function san_pham_theo_danh_muc($sanpham, $cond){
            $sql = "SELECT * FROM $sanpham WHERE $cond";
            return  $this->db->select($sql);
        }
    }

?>