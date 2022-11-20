<style>
.wrap_link_login-dattour{
    position: relative;
}

.link_login-dattour{
    text-decoration: none;
    font-size: 18px;
    font-weight: 600;
    width: 90%;
    background-color: #ccc;
    position: absolute;
    top: 30px;
    left: 50%;
    height: 60px;
    transform: translateX(-50%);
    border-radius: 10px;
    transition: 0.15s linear;
    color: #333;
}

.link_login-dattour:hover {
    background-color: #2cccff;
    color:#fff;
}
</style>

<div>
<div class="tour_ticket-in">
    <h3>---Đặt Tour Du Lịch---</h3>
    <div class="wrap_form_tour-in">
        <p>Thông tin chi tiết về tour:</p> <?php 
            if(isset($data['get_tour_info'])){
                while($row = mysqli_fetch_assoc($data['get_tour_info'])) {
                    echo '<p style="color: #6aa7ff; font-size: 20px">'.$row['tentour'].'('.$row['songay'].'Ngày)</p>';
                ?>
                <p>Các địa điểm có thể ghé thăm:</p><br>
                <p><?php echo $row['info_tour'] ?></p>
</div>
<form action='<?php echo _WEB_ROOT;?>/thongtindattour/show_bill/<?php echo $_SESSION['user_id'] ?>' method="POST">
    <input type="hidden" name="tentour" value="<?php echo $row['tentour'] ?>">
    <input type="hidden" name="songay" value="<?php echo $row['songay'] ?>">
    <input type="hidden" name="gianguoilon" value="<?php echo $row['gia_nguoi_lon'] ?>">
    <input type="hidden" name="giatreem" value="<?php echo $row['gia_tre_em'] ?>">
    <div class="wrap_content-customer">
        <div class="contact_customer">
            <div class="contact_customer-form">
                <p>Thông tin liên hệ khách hàng</p>
                <div class="contact_customer-item">
                    <label for="">Họ và tên</label>
                    <input type="text" name="username_cont" required>
                </div>
                <div class="contact_customer-item">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="dienthoai_cont" required>
                </div>
                <div class="contact_customer-item">
                    <label for="">Email</label>
                    <input type="email" name="email_cont" required>
                </div>
        </div>
        </div>
    <div class="wrap_ticket-price">
        <div class="ticket_price">
                <p class="title_price">Số lượng khách</p>
                <div class="ticket_price-item">
                    <label for="amount_adult">Người lớn x <input type="number" min = "1" class="amount_input" id="amount_adult" name="amount_adult" required> </label>
                    <p><span class="price_adult"><?php echo $row['gia_nguoi_lon']; ?></span>đ/1 người lớn</p>       
                </div>
                <div class="ticket_price-item">
                    <label for="amount_child">Trẻ em x <input type="number" min = "0" class="amount_input" id="amount_child" name="amount_child" required></label>
                    <p><span class="price_child"><?php echo $row['gia_tre_em'];?></span>đ/1 trẻ em</p>
                </div>
                <input type="text" name="gia_tien" class="giatien_tour" hidden >
                <?php
                }
            }
                ?>
        </div>
        <div>
            <?php
                if(!isset($_SESSION['user_id'])){
                    ?>
                    <div class="wrap_link_login-dattour">
                        <a href="<?php echo _WEB_ROOT;?>/login" class="link_login-dattour">Đăng nhập để đặt tour</a>
                    </div>
                    <?php
                }else{
                    ?>
                        <input type="submit" name="btn_booktour" class="btn_booktour" value="Đặt tour ngay" onclick="tinhTienTour()">
                    <?php
                }
            ?>
        </div>
</div>
</form>

</div> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br>
<p class="title_price">---Có Thế Bạn Chưa Biết Về Dịch Vụ Của Chúng Tôi---</p>
<div class="wrap_content-customer">
<div class="wrap_ticket-price">
    <p class="title_price">Bạn đã có phương tiện di chuyển đến địa điểm hẹn chưa?</p>
    <p class="title_price">Chúng tôi sẽ đưa đón bạn tận nhà với dịch vụ ưu đãi nhất!</p>
    <p class="title_price">Mời bạn chọn phương tiện!</p>
    
        <div>
        <button type="button" class="btn_book">Đặt Vé Máy Bay Ngay</button>
        </div>
        <div>
        <button type="button" class="btn_book">Đặt Vé Ô Tô Ngay</button>
        </div>
</div>
<div class="wrap_ticket-price">
    <p class="title_price">Một Chuyến Đi Sẽ Thú Vị Và Thoải Mái Hơn Khi Bạn Có Thời Gian Dừng Chân Nghỉ Ngơi Đúng Lúc Tại Khu Khách Sạn Sang Trọng Nhất!</p>
    <p class="title_price">HÃY ĐẾN VỚI CHÚNG TÔI ĐÓ LÀ SỰ LỰA CHỌN TỐT NHẤT DÀNH CHO BẠN!</p>
    <p class="title_price">Mời bạn đặt khách sạn ưu đãi với giá cực sốc!</p>
    <div>
        <button type="button" class="btn_book">Đặt Khách Sạn Ngay</button>
    </div>
</div>
</div>
