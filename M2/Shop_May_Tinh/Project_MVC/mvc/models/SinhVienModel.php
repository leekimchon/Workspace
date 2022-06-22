<?php
    class SinhVienModel extends DB{
        public function getSV(){
            $sql = "SELECT * FROM sv";
            $stmt = $this->conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $result = $stmt->fetchAll();
            return $result;
        }
    }
?>