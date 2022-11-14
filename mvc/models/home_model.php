<?php
    class home_model extends connectDB{
        /* db user */
        function qltkAll() {
            $sql = "SELECT * FROM user";
            return mysqli_query($this->conn, $sql);
        }

        function qltk_user($id_user) {
            $sql = "SELECT * FROM user WHERE id = '$id_user'";
            return mysqli_query($this->conn, $sql);
        }
        
        function del_user($id_user) {
            $sql = "DELETE FROM user WHERE id = '$id_user'";
            return mysqli_query($this->conn,$sql);
        }
        
        function search_user($username) {
            $sql = "SELECT * FROM user WHERE username LIKE '%$username%'";
            return mysqli_query($this->conn, $sql);
        }

        function edit_user($id_user, $username_ud, $email_ud, $sdt_ud, $diachi_ud) {
            $sql = "UPDATE user SET username='$username_ud', email='$email_ud', dienthoai='$sdt_ud', diachi='$diachi_ud'  WHERE id = '$id_user'";
            return mysqli_query($this->conn,$sql);
            
        }

        /* db tour */
        function search_tour($tourname) {
            $sql = "SELECT * FROM dstour WHERE tentour LIKE '%$tourname%'";
            return mysqli_query($this->conn, $sql);
        }
    }

?>