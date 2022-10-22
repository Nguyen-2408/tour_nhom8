<?php
    class home_model extends connectDB{
        
        function qltkAll() {
            $sql = "SELECT * FROM user";
            return mysqli_query($this->conn, $sql);
        }
       
    }

?>