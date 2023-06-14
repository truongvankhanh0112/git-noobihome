<?php
    class giohangmodel extends dmodel
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function insert_donhang($table, $data){
            return $this->db->insert($table, $data);
        }
        public function insert_ctdh($table, $data){
            return $this->db->insert($table, $data);
        }
        public function insert_LastInsertId_km($idtk, $tongtien, $today, $diachinhanhang, $sdt, $ghichu, $id_km, $trangthaidonhang, $thanhtoan){
            $sql = "INSERT INTO donhang (idtk, giatridh, ngayxuathd, diachinhanhang, sdt, ghichu, id_km ,trangthaidonhang, thanhtoan) 
                        VALUES ('$idtk', '$tongtien',' $today',' $diachinhanhang', '$sdt', '$ghichu', '$id_km', '$trangthaidonhang', '$thanhtoan')";
            $this->db->exec($sql);
            return $this->db->lastInsertId();
        }
        public function insert_LastInsertId($idtk, $tongtien, $today, $diachinhanhang, $sdt, $ghichu, $trangthaidonhang, $thanhtoan){
            $sql = "INSERT INTO donhang (idtk, giatridh, ngayxuathd, diachinhanhang, sdt, ghichu ,trangthaidonhang, thanhtoan) 
                        VALUES ('$idtk', '$tongtien',' $today',' $diachinhanhang', '$sdt', '$ghichu', '$trangthaidonhang', '$thanhtoan')";
            $this->db->exec($sql);
            return $this->db->lastInsertId();
        }
        public function DH_byId($table, $id){
            $sql = "SELECT*FROM $table WHERE $id";
            return $this->db->select($sql);
        }
        public function DH_select($tableDH, $table_taikhoan)
        {
            $sql = "SELECT * FROM $tableDH, $table_taikhoan WHERE $tableDH.idtk = $table_taikhoan.idtk ORDER BY iddonhang DESC";
            return  $this->db->select($sql);
        }
        public function select_loaidm($table_danhmuc, $table_loaidm){
            $sql = "SELECT * FROM $table_danhmuc, $table_loaidm WHERE $table_loaidm.iddm = $table_danhmuc.iddm ORDER BY $table_loaidm.iddm ASC";
            return  $this->db->select($sql);
        }
        public function ctdh_byId($table_ctdh, $id){
            $sql = "SELECT*FROM $table_ctdh WHERE $id";
            return $this->db->select($sql);
        }
        public function select_DH($table_dh, $table_ctdh, $cond){
            $sql = "SELECT*FROM $table_dh, $table_ctdh WHERE $table_ctdh.iddonhang = $table_dh.iddonhang AND $cond";
            return $this->db->select($sql);
        }
        public function update_ttdh($table, $data, $id){
            return $this->db->update($table, $data, $id);
        }
    }
    
?>