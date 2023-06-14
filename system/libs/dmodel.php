<?php

    class dmodel{
        protected $db = array();
        public function __construct()
        {
            $connect = 'mysql:dbname=noobihome; host=localhost;';
            $username = 'root';
            $pass = '';
            $this->db = new  database($connect, $username, $pass);
        }
        
    }
    

?>