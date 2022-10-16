<div>
<div class="plane_ticket-in">
    <h3>Đặt vé máy bay</h3>
    <h5>Chuyến bay từ Hà Nội đến Tp.HCM</h5>
    <div class="wrap_form_plane-in">
        <form action="" class="form_plane-in">
            <p>Thông tin khách hàng</p>
            <label for="" class="price_txt txt1">người lớn: 400000đ/1 người</label>
            <label for="" class="price_txt txt2">trẻ em: 320000đ/1 người</label>
            <label for="" class="amount_cus-text">Số lượng: <span class="amount_cus">1</span></label>
            <table class="tbl_plane-ticket">
                <tr>
                    <th>Họ và tên</th>
                    <th>Độ tuổi</th>
                    <th>Giới tính</th>
                    <th>Xóa</th>
                </tr>
                <tr>
                    <td>
                        <div class="wrap_cus-amount">
                            <input type="text" placeholder="Ví dụ: Nguyễn Văn A" class="input plane_name-customer">
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
                <p>Thông tin liên hệ</p>
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
            <p class="title_price">Chi tiết giá vé máy bay</p>
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
        <button type="button" class="btn_book">Đặt vé ngay</button>
    </div>
</div>
</div> 
