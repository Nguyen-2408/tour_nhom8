<?php
    class home_model extends connectDB{
        
        function qltkAll() {
            $sql = "SELECT * FROM user";
            return mysqli_query($this->conn, $sql);
        }

        function qltk_user($id_user) {
            $sql = "SELECT * FROM user WHERE id = '$id_user'";
            return mysqli_query($this->conn, $sql);
        }
       
    }

?>