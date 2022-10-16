<?php
    class login_model extends connectDB {
      
        function check_user($username,$password) {
                $sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";
                return mysqli_query($this->conn, $sql);
        }
    }
?>