<?php
    class danhmucmodel extends dmodel
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function select_danhmuc($danhmuc){
            $sql = "SELECT * FROM $danhmuc WHERE 1";
            return  $this->db->select($sql);
        }
        public function danhmuc_byid($danhmuc, $id){
            $sql = "SELECT*FROM $danhmuc WHERE $id";
            return $this->db->select($sql);
        }
        public function insert_danhmuc($table, $data){
            return $this->db->insert($table, $data);
        }
        public function update_danhmuc($table, $data, $id){
            return $this->db->update($table, $data, $id);
        }
        public function delete_danhmuc($table, $id){
            return $this->db->delete($table, $id);
        }
        public function loaidanhmuc_byid( $danhmuc, $loaidm, $iddm){
            $sql = "SELECT * FROM $danhmuc, $loaidm WHERE $loaidm.iddm = $danhmuc.iddm AND $loaidm.idloaidm='$iddm' ";
            return $this->db->select($sql);
        }
        public function select_loaidm($table_loaidm){
            $sql = "SELECT * FROM $table_loaidm";
            return  $this->db->select($sql);
        }
    }
    
?>