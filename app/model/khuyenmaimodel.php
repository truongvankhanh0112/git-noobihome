<?php
    class khuyenmaimodel extends dmodel
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function select_khuyenmai($table){
            $sql = "SELECT * FROM $table WHERE 1";
            return  $this->db->select($sql);
        }
        public function select_khuyenmai_byid($table, $id){
            $sql = "SELECT * FROM $table WHERE $id";
            return  $this->db->select($sql);
        }
        public function insert_km($table, $data){
            return $this->db->insert($table, $data);
        }
        public function getKhuyenmai($maKhuyenMai)
        {
            $sql = "SELECT * FROM khuyenmai WHERE  maKhuyenMai='".$maKhuyenMai."'";
            return $this->db->select($sql);
        }
        public function delete_km($table, $id){
            return $this->db->delete($table, $id);
        }
        public function update_soluongmakhuyenmai($table, $data, $id){
            return $this->db->update($table, $data, $id);
        }
    }
    
?>