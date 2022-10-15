<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/vemb.css">
    <title>plane out</title>
</head>
<body>
    <header>
        <div class="head_menu">
            <div class="">
                <a href="#" class="text_logo">8.tour</a>
            </div>
                <a href="" class="cart_amount">
                    <i class="fa-solid fa-cart-shopping"></i>                   
                </a>  
            <div class="wrap_user-info">
                <div class="user_info">
                    <img src="./2230-poggies-peepo.png" alt="" class="user_image">
                    <p class="user_name">UserName</p>
                </div>
                  
                <div class="nav_user-info">
                    <ul class="nav_user-list">
                        <li class="nav_user-item"><a href="" class="nav_user-link">Thông tin tài khoản</a></li>
                        <li class="nav_user-item"><a href="" class="nav_user-link">Thông tin đặt tour</a></li>
                        <li class="nav_user-item"><a href="" class="nav_user-link">Phòng khách sạn</a></li>
                        <li class="nav_user-item"><a href="" class="nav_user-link">Vé máy bay</a></li>
                        <li class="nav_user-item"><a href="" class="nav_user-link">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav_menu">
            <ul class="list_menu">
                <li class="list_item">
                    <a href="" class="menu_link">Trang chủ</a>
                </li>
                <li class="list_item">
                    <a href="" class="menu_link">Giới thiệu</a>
                </li>
                <li class="list_item">
                    <a href="" class="menu_link">Tour</a>
                </li>
                <li class="list_item">
                    <a href="#discount" class="menu_link">Ưu đãi & Combo</a>
                </li>
                <li class="list_item">
                    <a href="#contact" class="menu_link">Liên hệ</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="planeticket_out">
        <div class="title_info">
            <h1>Thông tin tài khoản</h1>
        </div>
        <div class="menu_info">
            <ul class="menu_info-list">
                <a href="#" class="menu_info-link" ><li class="menu_info-item">Quản lí tài khoản</li></a>
                <a href="#" class="menu_info-link"><li class="menu_info-item">Tour đã đặt</li></a>
                <a href="#" class="menu_info-link"><li class="menu_info-item">Đơn phòng khách sạn</li></a>
                <a href="#" class="menu_info-link"><li class="menu_info-item active">Vé máy bay</li></a>
                <a href="#" class="menu_info-link"><li class="menu_info-item">Ô tô</li></a>
            </ul>
        </div>
        <div class="wrap_ticket-info">
<!--  -->
            <div class="cus-info">
                <h5 >Thông tin khách hàng</h5>
                <h5 class="ticket_amount">Số lượng: <span>5</span></h5>
                <table class="tbl_show-ticket">
                    <tr>
                        <th>Họ và tên</th>
                        <th>Độ tuổi</th>
                        <th>Giới tính</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="cus_name input">
                        </td>
                        <td>
                            <input type="text" class="cus_age input">
                        </td>
                        <td>
                            <input type="text" class="cus_sex input">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="cus_name input">
                        </td>
                        <td>
                            <input type="text" class="cus_age input">
                        </td>
                        <td>
                            <input type="text" class="cus_sex input">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="cus_name input">
                        </td>
                        <td>
                            <input type="text" class="cus_age input">
                        </td>
                        <td>
                            <input type="text" class="cus_sex input">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="cus_name input">
                        </td>
                        <td>
                            <input type="text" class="cus_age input">
                        </td>
                        <td>
                            <input type="text" class="cus_sex input">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="cus_name input">
                        </td>
                        <td>
                            <input type="text" class="cus_age input">
                        </td>
                        <td>
                            <input type="text" class="cus_sex input">
                        </td>
                    </tr>
                </table>
<!--  -->
                <div class="show_info-contact">
                    <p>Thông tin liên hệ</p>
                    <div class="wrap_show-ct">
                        <div class="ct-1">
                            <div class="wrap_ct">
                                <label for="">Họ tên</label>
                                <input type="text" class="show_name">
                            </div>
                            <div class="wrap_ct">
                                <label for="">Số điện thoại</label>
                                <input type="text" class="show_phone">
                            </div>
                        </div>
                        <div class="wrap_ct">
                            <label for="">Email</label>
                            <input type="text" class="show_email">
                        </div>
                    </div>
                </div>
            </div>
<!--  -->
            <div class="show_plane-info">
                <div class="airline_info">
                    <div class="airline_place">
                        <p>Hà Nội</p>
                        <i class="fa-solid fa-arrow-right"></i>
                        <p>Tp.HCM</p>
                    </div>
                    <div class="wrap_detail-time">
                        <div class="fly_item">
                            <div class="time_start">
                                <p>Bắt đầu</p>
                                <p class="time">20:00</p>
                                <p>Ngày 01/10/2022</p>
                            </div>
                            <div class="total_fly-time">
                                <p>Thời gian bay</p>
                                <p><span>2</span>h <span>30</span>m</p>
                            </div>
                            <div class="time_end">
                                <p>Kết thúc</p>
                                <p class="time">22:30</p>
                                <p>Ngày 01/10/2022</p>
                            </div>
                        </div>
                        <div class="fly_item">
                            <div class="aminate_plane">       
                            <p class="place place-start">Hà Nội</p>
                                <i class="fa-solid fa-plane"></i>
                                <div class="cloud-items">
                                    <i class="fa-solid fa-cloud" style="--i:0"></i>
                                    <i class="fa-solid fa-cloud" style="--i:2"></i>
                                    <i class="fa-solid fa-cloud" style="--i:1"></i>
                                    <i class="fa-solid fa-cloud" style="--i:3"></i>
                                </div>
                            <p class="place place-end">Tp.HCM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap_show-price">
                        <div class="show_price">
                            <p class="title_show-price">Giá vé máy bay</p>
                            <div class="show_price-item">
                                <label for="">Người lớn x <span class="amount_adult">5</span></label>
                                <p><span class="show_price-adult">2000000</span>đ</p>
                            </div>
                            <div class="show_price-item">
                                <label for="">Trẻ em x <span class="amount_child">0</span></label>
                                <p><span class="show_price-child">0</span>đ</p>
                            </div>
                            <div class="show_price-item">
                                <label for="">Tổng tiền</label>
                                <p><span class="show_total">2000000</span>đ</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn_edit-ticket">Sửa thông tin</button>
                    </div>
            </div>
        </div>               
    </div>

    <script src="./public/js/app.js"></script>
</body>
</html>