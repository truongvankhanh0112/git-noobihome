<?php

use LDAP\Result;

    class loginmodel extends dModel{
        public function __construct()
        {
            parent::__construct();
        }
        public function select_taikhoan($table){
            $sql = "SELECT*FROM $table WHERE 1";
            return $this->db->select($sql);
        }
        public function login($table, $email, $pass)
        {
            $sql = "SELECT*FROM $table WHERE email=? AND pass=?";
            return $this->db->affectedRows($sql, $email, $pass);
        }
        public function getlogin($table, $email, $pass)
        {
            $sql = "SELECT*FROM $table WHERE email=? AND pass=?";
            return $this->db->selectUser($sql, $email, $pass);
        }
        public function update_taikhoan($table, $data, $id){
            return $this->db->update($table, $data, $id);
        }
        public function delete_tk($table, $id){
            return $this->db->delete($table, $id);
        }
        public function taikhoan_byid($table, $id){
            $sql = "SELECT*FROM $table WHERE $id";
            return $this->db->select($sql);
        }
        public function insert_tk($table, $data){
            return $this->db->insert($table, $data);
        }
        public function checkEmail($email){
            $sql = "SELECT * FROM taikhoan WHERE  email='".$email."'";
            return $this->db->select($sql);
        }
        
    }

?>