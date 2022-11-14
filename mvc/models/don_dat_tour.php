<?php
class don_dat_tour extends connectDB{
    function get_all_don(){
        $sql = "SELECT * FROM bill_tour";
        return mysqli_query($this->conn, $sql);
    }
}   

?>