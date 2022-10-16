<?php
    class signup_model extends connectDB {
        function check_user($username,$email) {
            $sql = "SELECT * FROM user WHERE username ='$username' OR email = '$email'";
            return mysqli_query($this->conn, $sql);
        }
        function add_user($username, $email,$password,$avatar){
            $sql = "INSERT INTO user(username, email, password, avatar) VALUES ('$username', '$email', '$password','$avatar')";
            return mysqli_query($this->conn, $sql);
        }
    }
?>