<div>
<div class="khachsan_ticket-in">
    <h3>---Đặt Khách Sạn Cao Cấp---</h3>
    <div class="wrap_form_khachsan-in">
        <form action="" class="form_khachsan-in">
        <p>Thông Tin chi tiết về Khách Sạn</p>
        
        </form>
    </div>
    <div class="wrap_form_khachsan-in">
        <form action="" class="form_khachsan-in">
            <p>Thông Tin Phòng</p>
            <table class="tbl_khachsan-ticket">
                <tr>
                    <th>Số Lượng Phòng</th>
                    <th>Loại Phòng</th>
                </tr>
                <tr>
                    <td>
                        <div class="wrap_cus-amount">
                            <input type="text" class="input khachsan_name-customer" name="txtsophong" id="idsophong">
                        </div>
                    </td>
                    <td>
                        <div>
                            <select class="input opt_age">
                                <option value="">---Loại Phòng---</option>
                                <option value="thuong">Thường</option>
                                <option value="vip">VIP</option>
                                <option value="tongthong">Tổng Thống</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
       <p>Thời Gian</p>
            <table class="tbl_khachsan-ticket" >
                    <tr>
                        <th>Từ Ngày</th>
                        <th>Đến Ngày</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="wrap_cus-amount">
                                <input type="date" class="input khachsan_name-customer" name="startdate" id="in_date">
                            </div>
                        </td>
                        <td>
                            <div class="wrap_cus-amount">
                                <input type="date" class="input khachsan_name-customer" name="enddate" id="out_date">
                            </div>
                        </td>
                    </tr>
                   

            </table>
            <p>Thông tin về khách hàng</p>
            <label for="" class="price_txt txt1">người lớn: 400000đ/1 người</label>
            <label for="" class="price_txt txt2">trẻ em: 320000đ/1 người</label>
            <label for="" class="amount_cus-text">Số lượng: <span class="amount_cus">1</span></label>
            <table class="tbl_khachsan-ticket">
                <tr>
                    <th>Họ và tên</th>
                    <th>Độ tuổi</th>
                    <th>Giới tính</th>
                    <th>Xóa</th>
                </tr>
                <tr>
                    <td>
                        <div class="wrap_cus-amount">
                            <input type="text" placeholder="Ví dụ: Nguyễn Văn A" class="input khachsan_name-customer">
                        </div>
                    </td>
                    <td>
                        <div>
                            <select name="age" class="input opt_age" onchange="countTag()">
                                <option value="nguoilon">Người lớn</option>
                                <option value="treem">Trẻ em</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div>
                            <select name="sex" class="input opt_sex">
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div >
                        </div>
                    </td>
                </tr>                       
            </table>
                <button type="button" class="btn_add-input"><i class="fa-solid fa-person-circle-plus"></i></button>

        </form>
    </div>
    <div class="wrap_content-customer">
        <div class="contact_customer">
            <form action="" class="contact_customer-form">
                <p>Thông tin liên hệ khách hàng</p>
                <div class="contact_customer-item">
                    <label for="">Họ và tên</label>
                    <input type="text">
                </div>
                <div class="contact_customer-item">
                    <label for="">Số điện thoại</label>
                    <input type="text">
                </div>
                <div class="contact_customer-item">
                    <label for="">Email</label>
                    <input type="email">
                </div>
        </form>
    </div>
    <div class="wrap_ticket-price">
        <div class="ticket_price">
            <p class="title_price">Chi tiết giá tour du lịch</p>
            <div class="ticket_price-item">
                <label for="">Người lớn x <span class="count_adult">1</span></label>
                <p><span class="price_adult">400000</span>đ</p>
            </div>
            <div class="ticket_price-item">
                <label for="">Trẻ em x <span class="count_child">0</span></label>
                <p><span class="price_child">0</span>đ</p>
            </div>
            <div class="ticket_price-item">
                <label for="">Tổng tiền</label>
                <p><span class="price_total">400000</span>đ</p>
            </div>
        </div>
    <div>
        <button type="button" class="btn_book">Đặt phòng ngay</button>
    </div>
</div>

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

</div>
