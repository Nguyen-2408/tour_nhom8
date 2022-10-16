<?php
    class home_model extends connectDB{
        
        function user_exist($id) {
            $sql = "SELECT * FROM user WHERE id ='$id'";
            return mysqli_query($this->conn, $sql);
        }
    }

?>