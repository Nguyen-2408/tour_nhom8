<?php
    class login_model extends connectDB {
      
        function check_user($username,$password) {
                $sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";
                $kq = mysqli_query($this->conn, $sql);
                return $kq;
        }
        function getAll_user($username,$password) {
            $sql = "SELECT * FROM user";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }

        
    }
?>