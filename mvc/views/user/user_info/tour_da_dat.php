<style>
.wrap_thongtindattour{
    position: relative;
    display:flex;
    border: 1px solid #000;
    margin-bottom: 15px;
    background-color: #fff;
}
.wrap_thongtindattour h2{
    position: absolute;
    padding: 20px;
    height: 100%;
    width: 30px;
    display: flex;
    align-items: center;
    background-color: #8d69f2;
    color:#fff;
}

.group-tt_dattour{
    padding: 30px 20px;
    margin: 0 40px;
}

.group-tt_dattour.gr1{

}
.group-tt_dattour.gr2{

}
.group-tt_dattour.gr3{

}

.thongtindattour {
    margin-bottom: 10px;
}

.thongtindattour p {
    font-size: 18px;
    font-weight: 500;
    color:#8d69f2;
}
.thongtindattour .txt_giatientour {
    font-size: 20px;
    font-weight: 700;
    color:#8d69f2;
}

.thongtindattour span {
    font-size: 18px;
    font-weight: 600;
    color:#000;
}
.wrap_link {
    padding: 5px;
}

.link_edit-don button{
    padding: 10px 10px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 10px;
    border: 1px solid #333;
    background-color: #ab91f5;
    color: #fff;
    cursor:pointer;
    transition:0.15s linear;
}

.link_edit-don button:hover {
    background-color: #8d69f2;
}

.link_del-don button{
    padding: 10px 10px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 10px;
    border: 1px solid #333;
    background-color: #f76767;
    cursor:pointer;
    color: #fff;
    transition:0.15s linear;

}
.link_del-don button:hover {
    background-color: #fb3636;

}

.form_edit-don-user{
    position: relative;
}

.form_edit-don-user .wrap_group-btn {
    position: absolute;
}

.form_edit-don{
    display: flex;
    position: relative;
    justify-content: center;
    padding: 40px 0;
    margin-bottom:40px;
    border: 1px solid #8d69f2;
    background-color: #2cccff;  
}

.wrap_input-edit-don{
    margin-left: 30px;
}

.wrap_input-edit-don label{
    position: absolute;
    top: 20%;
    transform: translateY(-50%);
    font-size: 14px;
    font-weight: 600;
}

.wrap_input-edit-don input{
    padding:5px 10px 5px 5px;
    border: 1px solid #ccc;
    border-radius: 10px;
    outline: none;
    font-size: 16px;
    height: 40px;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.wrap_input-edit-don .name_input{
    width: 200px;
}

.wrap_input-edit-don .sdt_input{
    width: 140px;
}

.wrap_input-edit-don .email_input{
    width: 400px;
}

.wrap_group-btn{
    position: absolute;
    bottom: 10px;
    right: 10px;  
}

.wrap_group-btn .update_input {
    padding: 5px 20px;
    font-size: 14px;
    font-weight: 600;
    background: #64d2f9;
    border: 1px solid #333;
    border-radius: 10px;
    cursor: pointer;
}

.wrap_group-btn .cancel_input {
    padding: 5px 20px;
    font-size: 14px;
    font-weight: 600;
    background: #ef3333;

    border: 1px solid #333;
    border-radius: 10px;
    cursor: pointer;
}
.link_add_tour{
    position: absolute;
    right: 30px;
    top: 150px;
    font-size: 14px;
    font-weight: 600;
    color: #333;
}

.link_add_tour:hover{
    color: red;
}

</style>    

<?php
    if(isset($data['show_bill'])) {
        if(mysqli_num_rows($data['show_bill']) > 0){
            ?>
            <a href="<?php echo _WEB_ROOT;?>/danhsachtour" class="link_add_tour">Đặt thêm tour</a>
        <?php
        }
    }
?>

<?php
if(isset($data['edit_don'])){
    while($row = mysqli_fetch_assoc($data['edit_don'])) {
        ?>
        <form action="<?php echo _WEB_ROOT;?>/thongtindattour/ud_don/<?php echo $row['id']; ?>" method="POST" class="form_edit-don-user">
            <p style="font-size: 16px; font-weight: 600; text-align: center; padding: 20px 0;">
                Cập nhật thông tin đơn đặt tour
            </p>
        <div class="form_edit-don">
                <div class="wrap_input-edit-don">
                    <label for="">Tên người liên hệ</label>
                    <input type="text" name="username_cont" class="name_input" value="<?php echo $row['username'] ?>" required>
                </div>
                <div class="wrap_input-edit-don">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt_cont" class="sdt_input" value="<?php echo $row['dienthoai'] ?>" required>
                </div>
                <div class="wrap_input-edit-don">
                    <label for="">Email</label>
                    <input type="text" name="email_cont" class="email_input" value="<?php echo $row['email'] ?>" required>
                </div>
                <div class="wrap_input-edit-don">
                    <label for="">Người lớn</label>
                    <input type="number" min = "1" name="amount_adult" id="so_nguoi_lon" class="amount_input" value="<?php echo $row['so_nguoi_lon'] ?>" required>
                </div>
                <div class="wrap_input-edit-don">
                    <label for="">Trẻ em</label>
                    <input type="number" min = "0" name="amount_child" id="so_tre_em" class="amount_input" value="<?php echo $row['so_tre_em'] ?>" required>
                </div>
                <input type="hidden" name="giatientour" class="update_giatientour">
            </div>
            <div class="wrap_group-btn">
                <input type="submit" name="update_don" value="Cập nhật" class="update_input" onclick="updateTienTour()">
                <a href="<?php echo _WEB_ROOT;?>/thongtindattour" onclick = "if (!confirm('Bạn có muốn hủy cập nhật thông tin?')) { return false; }">
                    <input type="button" value="Hủy" class="cancel_input">
                </a>
            </div>
        </form>

        <?php
    }
}
?>

<?php
    if(isset($data['show_bill'])) {
        if(mysqli_num_rows($data['show_bill']) > 0){
            $stt = 1;
            while($row = mysqli_fetch_assoc($data['show_bill'])){
                ?>
                <input type="hidden" name="" class="gia_nguoi_lon" value="<?php echo $row['gia_nguoi_lon'] ?>">
                <input type="hidden" name="" class="gia_tre_em" value="<?php echo $row['gia_tre_em'] ?>">
                <div class="wrap_thongtindattour">
                    <h2><?php echo $stt; ?></h2>
                    <div class="group-tt_dattour gr1">
                        <div class="thongtindattour">
                            <p><span>Tên tour: </span><?php echo $row['tentour'] ?></p>
                        </div>
                        <div class="thongtindattour">
                            <p><span>Số ngày: </span><?php echo $row['songay'] ?> ngày</p>
                        </div>
                    </div>
                    <div class="group-tt_dattour gr2">
                        <div class="thongtindattour">
                            <p><span>Tên người liên hệ: </span><?php echo $row['username'] ?></p>
                        </div>
                        <div class="thongtindattour">
                            <p><span>Số điện thoại: </span><?php echo $row['dienthoai'] ?></p>
                        </div>
                        <div class="thongtindattour">
                            <p><span>Email: </span><?php echo $row['email'] ?></p>
                        </div>
                    </div>
                    <div class="group-tt_dattour gr3">
                        <div class="thongtindattour">
                            <p><span>Người lớn: </span><?php echo $row['so_nguoi_lon'] ?> người</p>
                        </div>
                        <div class="thongtindattour">
                            <p><span>Trẻ em: </span><?php echo $row['so_tre_em'] ?> người</p>
                        </div>
                        <div class="thongtindattour">
                            <p><span>Giá tiền: </span><span class ="txt_giatientour"><?php echo $row['gia_tien']?></span>đ</p>
                        </div>
                    </div>
                    <div class="group-tt_dattour">
                        <div class="wrap_link">
                            <a href="<?php echo _WEB_ROOT;?>/thongtindattour/edit_tour/<?php echo $row['id']; ?>" class="link_edit-don">
                                <button>Sửa thông tin</button>
                            </a>
                        </div>
                        <div class="wrap_link">
                            <a href="<?php echo _WEB_ROOT;?>/thongtindattour/del_don/<?php echo $row['id']; ?>" class="link_del-don" onclick = "if (!confirm('Bạn có muốn hủy đơn?')) { return false; }">
                                <button>Hủy đơn</button>
                            </a>
                        </div>
                    </div>
                </div>  
            <?php
        $stt++;
        }
    }else {
        ?>
        <div style="text-align: center; position:relative">
            <p style="font-size: 18px;
                    font-weight: 600;
                    padding: 20px">Không có đơn nào -> <a href="<?php echo _WEB_ROOT;?>/danhsachtour" style="color: #2cccff">Đặt tour ngay</a> </p>
            <img src="https://cdn.dribbble.com/users/129991/screenshots/2999630/media/41e62edaa27dcb2ca57f4672c9b66768.png" alt="" style="height: 340px; border-radius: 10px; border: 1px solid #ccc; user-select: none ">
            <img src="https://cdn3.emoji.gg/emojis/7761-blackexclaim.gif" width="64px" height="64px" alt="BlackExclaim" style="position: absolute;
                                                                                                                                left: 50%;
                                                                                                                                top: 50%;
                                                                                                                                transform: translate(-50%, -50%);">
        </div>
        <?php
    }
}
?>