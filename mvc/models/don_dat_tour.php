<?php
class don_dat_tour extends connectDB{
    function get_all_don(){
        $sql = "SELECT * FROM bill_tour";
        return mysqli_query($this->conn, $sql);
    }

    function get_don($id_don) {
        $sql = "SELECT * FROM bill_tour WHERE id = '$id_don'";
        return mysqli_query($this->conn,$sql);
    }

    function ud_don($id_don, $username_cont, $sdt_cont, $email_cont, $amount_adult, $amount_child, $giatientour){
        $sql = "UPDATE bill_tour SET username ='$username_cont', dienthoai='$sdt_cont', email='$email_cont', so_nguoi_lon='$amount_adult', so_tre_em='$amount_child', gia_tien ='$giatientour' WHERE id = '$id_don'";
        return mysqli_query($this->conn,$sql);
    }

    function search_don($tentour){
        $sql = "SELECT * FROM bill_tour WHERE tentour LIKE '%$tentour%'";
        return mysqli_query($this->conn, $sql);
    }

    function del_don($id_don) {
        $sql = "DELETE FROM bill_tour WHERE id = '$id_don'";
        return mysqli_query($this->conn,$sql);
    }
}   

?>