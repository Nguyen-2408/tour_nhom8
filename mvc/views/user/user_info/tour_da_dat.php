<div style="padding-top: 80px"></div>
<p style="font-size: 24px; font-weight: 700; text-align: center; margin-top: 30px;">Các tour đã đặt</p>

<?php
    if(isset($data['show_bill'])) {
        if(mysqli_num_rows($data['show_bill']) > 0){

            while($row = mysqli_fetch_assoc($data['show_bill'])){
                ?>
                <div class="wrap_thongtindattour">
                    <div class="thongtindattour">
                        <p><span>Mã tour: </span><?php echo $row['id'] ?></p>
                    </div>
                    <div class="thongtindattour">
                        <p><span>Tên tour: </span><?php echo $row['tentour'] ?></p>
                    </div>
                    <div class="thongtindattour">
                        <p><span>Số ngày: </span><?php echo $row['songay'] ?> ngày</p>
                    </div>
                    <div class="thongtindattour">
                        <p><span>Tên người liên hệ: </span><?php echo $row['username'] ?></p>
                    </div>
                    <div class="thongtindattour">
                        <p><span>Số điện thoại: </span><?php echo $row['dienthoai'] ?></p>
                    </div>
                    <div class="thongtindattour">
                        <p><span>Email: </span><?php echo $row['email'] ?></p>
                    </div>
                    <div class="thongtindattour">
                        <p><span>Người lớn: </span><?php echo $row['so_nguoi_lon'] ?> người</p>
                    </div>
                    <div class="thongtindattour">
                        <p><span>Trẻ em: </span><?php echo $row['so_tre_em'] ?> người</p>
                    </div>
                </div>
            <?php
        }
    }else {
        ?>
        <p style="font-size: 18px; font-weight: 600">Không có đơn nào -> <a href="<?php echo _WEB_ROOT;?>/danhsachtour">Đặt tour ngay</a> </p>
        <?php
    }
}
?>