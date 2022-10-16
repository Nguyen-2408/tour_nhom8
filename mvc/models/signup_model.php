<?php
    class signup_model extends connectDB {
        function check_user($username,$email) {
            $sql = "SELECT * FROM user WHERE username ='$username' OR email = '$email'";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
        function add_user($username, $email,$password){
            $sql = "INSERT INTO user(username, email, password) VALUES ('$username', '$email', '$password')";
            $kq = mysqli_query($this->conn, $sql);
            return $kq;
        }
    }
?>