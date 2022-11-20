<?php
    class thong_tin_dat_tour_model extends connectDB {
        function bill_tour($tentour, $songay, $username_cont, $dienthoai_cont, $email_cont, $amount_adult, $amount_child, $gianguoilon, $giatreem, $giatien, $id_user){   
            $sql = "INSERT INTO bill_tour (tentour, songay, username, dienthoai, email, so_nguoi_lon, so_tre_em, gia_nguoi_lon, gia_tre_em, gia_tien, id_user) VALUES ('$tentour', '$songay','$username_cont', '$dienthoai_cont', '$email_cont', '$amount_adult', '$amount_child', '$gianguoilon', '$giatreem', '$giatien', '$id_user')";
            return mysqli_query($this->conn, $sql);
        }

        function show_bill_tour($id_user) {
            $sql = "SELECT * FROM bill_tour WHERE id_user = '$id_user'";
            return mysqli_query($this->conn, $sql);
        } 
    }
?>