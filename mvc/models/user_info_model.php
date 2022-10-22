<?php
    class user_info_model extends connectDB {
        function update_user($id_user,$email, $sdt,$avatar,$diachi) {
            $sql = "UPDATE user SET email = '$email', dienthoai = '$sdt', avatar = '$avatar', diachi = '$diachi' WHERE id = '$id_user'";
            return mysqli_query($this->conn, $sql);
        }
    }
?>