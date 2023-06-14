<?php
    class sanphammodel extends dmodel{
        public function __construct()
        {
            parent::__construct();
        }
        public function select_sanpham($table){
            $sql = "SELECT * FROM $table";
            return  $this->db->select($sql);
        }
        public function insert_sanpham($table, $data){
            return $this->db->insert($table, $data);
        }
        public function delete_sanpham($table, $id){
            return $this->db->delete($table, $id);
        }
        public function sanpham_byid($table, $id){
            $sql = "SELECT*FROM $table WHERE $id ";
            return $this->db->select($sql);
        }
        public function update_sanpham($table, $data, $id){
            return $this->db->update($table, $data, $id);
        }
    }

?>