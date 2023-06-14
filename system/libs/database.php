<?php

    class database extends PDO{
        public function __construct($connect, $username, $pass)
        {
            parent::__construct($connect, $username, $pass);
        }
        
        public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC){
            $statement = $this->prepare($sql);
            foreach ($data as $key => $value) {
                # code...
                $statement -> bindParam($key, $value);

            }
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        }
        public function insert($table, $data){
            $keys = implode(",", array_keys($data));
            $values = ":" .implode(", :",array_keys($data));
            $sql = "INSERT INTO $table($keys) VALUES ($values)";
            $statement = $this->prepare($sql);

            foreach ($data as $key => $value) {
                $statement -> bindValue(":$key", $value);
            }
            return $statement->execute();
        }
        public function update($table, $data, $id){
            $updateKeys = NULL;
            foreach ($data as $key => $value) {
                $updateKeys .= "$key=:$key,";
            }
            $updateKeys = rtrim($updateKeys, ",");
            $sql = "UPDATE $table SET $updateKeys WHERE $id ";
            $statement = $this->prepare($sql);
            foreach ($data as $key => $value) {
                $statement -> bindValue(":$key", $value);
            }
            return $statement->execute();
        }
        public function delete($table, $cond,$limit = 1)
        {
            $sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
            return $this->exec($sql);
        }
        // //so sánh dữ liệu trong csdl
        public function affectedRows($sql, $tentk, $matkhau)
        {
            $statement = $this->prepare($sql);
            $statement->execute(array($tentk, $matkhau));
            return $statement->rowCount();
        }
        public function selectUser($sql, $tentk, $matkhau)
        {
            $statement = $this->prepare($sql);
            $statement->execute(array($tentk, $matkhau));
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>