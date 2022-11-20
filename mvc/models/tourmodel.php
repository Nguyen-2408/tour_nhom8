<?php
    class tourmodel extends connectDB {
        function db_qltour() {
            $sql = "SELECT * FROM dstour";
            return mysqli_query($this->conn, $sql);
        }
        function tour_info($id) {
            $sql = "SELECT * FROM dstour WHERE id = '$id'";
            return mysqli_query($this->conn, $sql);
        }
        function get_all_tour($id_diadiem) {
            $sql = "SELECT * FROM dstour WHERE iddiadiem = '$id_diadiem'";
            return mysqli_query($this->conn, $sql);
        }

        function add_tour($tourname, $anhtour, $songay, $info_tour, $gianguoilon, $giatreem) {
            $sql = "INSERT INTO dstour(tentour, anhtour, songay, info_tour, gia_nguoi_lon, gia_tre_em) VALUES ('$tourname', '$anhtour', '$songay', '$info_tour', '$gianguoilon', '$giatreem')";
            return mysqli_query($this->conn, $sql);
        }

        function tim_kiem_tour($tentour) {
            $sql = "SELECT * FROM dstour WHERE tentour LIKE '%$tentour%'";
            return mysqli_query($this->conn, $sql);
        }

        function del_tour($id_tour) {
            $sql = "DELETE FROM dstour WHERE id = '$id_tour'";
            return mysqli_query($this->conn,$sql);
        }

        function edit_tour($id_tour, $tourname_ud, $anhtour_ud, $songay_ud, $info_tour_ud, $gianguoilon_ud, $giatreem_ud) {
            $sql = "UPDATE dstour SET tentour='$tourname_ud',anhtour = '$anhtour_ud', songay='$songay_ud', info_tour='$info_tour_ud', gia_nguoi_lon='$gianguoilon_ud', gia_tre_em ='$giatreem_ud'  WHERE id = '$id_tour'";
            return mysqli_query($this->conn,$sql);
        }
    }
?>