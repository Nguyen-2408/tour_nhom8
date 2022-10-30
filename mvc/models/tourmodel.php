<?php
    class tourmodel extends connectDB {
        function db_qltour() {
            $sql = "SELECT * FROM dstour";
            return mysqli_query($this->conn, $sql);
        }
        function tour_info($id) {
            $sql = "SELECT * FROM dstour WHERE id = '$id'";
            return mysqli_query($this->conn, $sql);
        }
        function get_all_tour($id_diadiem) {
            $sql = "SELECT * FROM dstour WHERE iddiadiem = '$id_diadiem'";
            return mysqli_query($this->conn, $sql);
        }

        function tim_kiem_tour($tentour) {
            $sql = "SELECT * FROM dstour WHERE tentour LIKE '%$tentour%'";
            return mysqli_query($this->conn, $sql);
        }
    }
?>