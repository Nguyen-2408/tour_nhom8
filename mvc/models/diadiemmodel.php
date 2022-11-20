<?php
    class diadiemmodel extends connectDB {
        function get_all_dia_diem() {
            $sql = "SELECT * FROM diadiem";
            return mysqli_query($this->conn, $sql);
        }

        function get_dia_diem_trong_nuoc(){
            $sql = "SELECT * FROM diadiem WHERE type = '0'";
            return mysqli_query($this->conn, $sql);
        }
        
        function get_dia_diem_nuoc_ngoai(){
            $sql = "SELECT * FROM diadiem WHERE type = '1'";
            return mysqli_query($this->conn, $sql);
        }
    }
?>