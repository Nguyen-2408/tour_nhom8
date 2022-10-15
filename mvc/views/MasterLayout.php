<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="public/css/trangchu.css">
    
    <title>Trang chủ</title>
</head>
<body>

    <!-- Menu -->
    <header>
        <div class="head_menu">
            <div class="">
                <a href="#" class="text_logo">8.tour</a>
            </div>
            <div class="btn_header">
                <button type="button" class="btn_sign btn_login">Đăng nhập</button>
                <button type="button" class="btn_sign btn_signup">Đăng kí</button>
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
                    <a href="" class="menu_link">Khách sạn</a>
                </li>
                <li class="list_item">
                    <a href="" class="menu_link">Phương tiện</a>
                    <div class="sub_menu">
                        <ul class="sub_menu-list">
                            <a href="" class="sub_menu-item"><li>Vé máy bay</li></a>
                            <a href="" class="sub_menu-item"><li>Ô tô</li></a>
                        </ul>
                    </div>
                </li>
                <li class="list_item">
                    <a href="" class="menu_link">Liên hệ</a>
                </li>
            </ul>
        </div>
    </header>
    <!-- Login -->
    <div class="card__login-event hidden">
        <div class="overlay__card-login">
            <div class="login__card">
                <div class="login__exit">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <p class="login_text">Đăng nhập</p>

                <form action="#" class="login__form">
                    <div class="form__group-login">
                        <input type="text" placeholder="Tên tài khoản" class="input__login">
                    </div>
                    <div class="form__group-login">
                        <input type="password" placeholder="Mật khẩu" class="input__login input__password">
                        
                        <div class="eye-close"><i class="fa-solid fa-eye-slash "></i></div>         
                        <div class="eye-open hidden"><i class="fa-solid fa-eye"></i></div>     
                    </div>
                    <div class="form__group-login">
                        <button type="submit" class="card__btn-login">Đăng nhập</button>
                    </div>
                </form>
               
                <p class="text__no-acc">Bạn chưa có tài khoản <a href="#" class="link__signup">Đăng kí ngay</a></p>
            </div>
        </div>
    </div>
    <!--  -->
    <!-- Sign up -->      
    <div class="card__signup-event hidden">
        <div class="overlay__card-signup">
            <div class="signup__card">
                <div class="signup__exit">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <p class="signup_text">Đăng kí</p>

                <form action="#" class="signup__form">
                    <div class="form__group-signup">
                        <input type="text" placeholder="Tên tài khoản" class="input__signup">
                    </div>
                    <div class="form__group-signup">
                        <input type="email" placeholder="Email" class="input__signup">
                    </div>
                    <div class="form__group-login">
                        <input type="password" placeholder="Mật khẩu" class="input__signup input__password-signup">
    
                        <div class="signup__eye-close"><i class="fa-solid fa-eye-slash "></i></div>         
                        <div class="signup__eye-open hidden"><i class="fa-solid fa-eye"></i></div>     
                    </div>
                    <div class="form__group-login">
                        <input type="password" placeholder="Nhập lại mật khẩu" class="input__signup input__password-again">
    
                        <div class="signup__eye-close1"><i class="fa-solid fa-eye-slash "></i></div>         
                        <div class="signup__eye-open1 hidden"><i class="fa-solid fa-eye"></i></div>     
                    </div>
                    <div class="form__group-signup">
                        <button type="submit" class="card__btn-signup">Đăng kí </button>
                    </div>
                </form>
                <p class="text__have-acc">Đã có tài khoản <a href="#" class="link__login">Đăng nhập tại đây</a></p>
            </div>
        </div>
    </div>
      
    <!--  -->
    <main>
        <!-- search-tour -->
         <div class="bg_home">
                <img src="public/images/bg_home.png" alt="" class="bg_home-img">
        </div>
        <div>
            <p class="text_bg">Khám phá hành trình của bạn</p>
        </div>
        <!-- form search tour -->
        <div>
            <form action="">
                <div class="wrap_tb-tour">
                    <table class="tb-tour">
                        <tr>
                            <th>Địa điểm khởi hành</th>
                            <th>Điểm đến</th>
                            <th>Ngày đi</th>
                            <th>Ngày về</th>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Nhập vị trí" class="input-search input_khoihanh"></td>
                            <td><input type="text" placeholder="Nơi muốn đến" class="input-search input_diemden"></td>
                            <td>
                                <input type="date" class="input-search input_ngaydi">
                            </td>
                            <td>
                                <input type="date" class="input-search input_ngayve"> 
                            </td>
                            <td rowspan="2">
                                <a href="">
                                    <div class="btn-search-tour">
                                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                                    </div>
                                </a>
                            </td>
                        </tr> 
                    </table>
                </div>
            </form>
        </div> 


        <!-- Giới thiệu về web -->
        <section>
            <form action="" class="form_gioithieu">
                <div class="gioithieu">
                    <div class="bg_gioithieu">
                        <img src="public/images/bg_gioithieu.png" alt="travel.io" class="gioithieu_img">
                    </div>
                    <div class ="content_gioithieu">
                        <h2 class="title_gioithieu">Giới thiệu về 8.tour </h2>
                        <p class="passage_gioithieu">8.tour là website giúp bạn lên kế hoạch và đặt các chuyến du lịch,
                            khám phá và trải nghiệm du lịch trong nước cũng như nước ngoài.
                            Chúng tôi tự hào cung cấp những lời khuyên và dịch vụ trung thực, phù hợp với từng khách hàng để
                            đảm bảo chuyến đi của khách hàng thật tuyệt vời trên mọi phương diện.
                        Lướt qua trang web của chúng tôi để lấy cảm hứng với hành trình tham quan và liên hệ với chúng tôi để tạo hành trình của bạn!
                        </p>
                        <div class="wrap_btn-gioithieu">
                            <button type="button" class="btn_gioithieu">Xem thêm</button>
                        </div>
                    </div>
                </div>
            </form>
        </section> 
        <!-- tour yêu thích trong nước -->
      <div class="tour_trongnuoc">
            <h3>Điểm đến yêu thích trong nước</h3>
            <div class="wrap_img-tour">
                <div class="img_tour">
                    <h4>Đà Lạt</h4>
                    <div>
                        <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a>
                    </div>
                    <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                        <a href="" class="tour_detail">Xem chi tiết</a>
                    
                </div>
                <div class="img_tour">
                    <h4>Sapa</h4>
                    <div>
                        <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a>
                    </div>
                    <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                        <a href="" class="tour_detail">Xem chi tiết</a>
                    
                </div>
                <div class="img_tour">
                    <h4>Phú Quốc</h4>
                    <div>
                        <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a>
                    </div>
                    <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                        <a href="" class="tour_detail">Xem chi tiết</a>
                    
                </div>
                <div class="img_tour">
                    <h4>Nha Trang</h4>
                    <div>
                        <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a>
                    </div>
                    <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                        <a href="" class="tour_detail">Xem chi tiết</a>
                    
                </div>
                <div class="img_tour">
                    <h4>Đà Nẵng</h4>
                    <div>
                        <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a>
                    </div>
                    <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                        <a href="" class="tour_detail">Xem chi tiết</a>
                    
                </div>
                <div class="img_tour">
                    <h4>Vũng tàu</h4>
                    <div>
                        <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a>
                    </div>
                    <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                        <a href="" class="tour_detail">Xem chi tiết</a>
                    
                </div>  
            </div>
        </div> 
                <div class="wrap-btn">
                    <button type="button" class="btn_vall">Xem tất cả</button>
                </div> 
<!-- tour nước ngoài -->
             <div class="tour_nước ngoài">
                <h3>Điểm đến yêu thích nước ngoài</h3>
                <div class="wrap_img-tour">
                    <div class="img_tour">
                        <h4>Singapore</h4>
                        <div>
                            <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                            <a href="" class="tour_detail">Xem chi tiết</a>
                        
                    </div>
                    <div class="img_tour">
                        <h4>Hàn Quốc</h4>
                        <div>
                            <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                            <a href="" class="tour_detail">Xem chi tiết</a>
                        
                    </div>
                    <div class="img_tour">
                        <h4>Dubai</h4>
                        <div>
                            <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                            <a href="" class="tour_detail">Xem chi tiết</a>
                        
                    </div>
                    <div class="img_tour">
                        <h4>Nhật Bản</h4>
                        <div>
                            <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                            <a href="" class="tour_detail">Xem chi tiết</a>
                        
                    </div>
                    
                        
                </div>
            </div>
                <div class="wrap-btn">
                    <button type="button" class="btn_vall">Xem tất cả</button>
                </div>
            </main>
            <div id="discount"></div>
            <!-- Ưu đãi -->

<h3>Ưu đãi</h3>
    <div class="slider_discount">
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="public/images/bg_gioithieu.png" alt="">
            </div>
        </div>
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="public/images/bg_gioithieu.png" alt="">
            </div>
        </div>
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="public/images/bg_gioithieu.png" alt="">
            </div>
        </div>
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="public/images/bg_gioithieu.png" alt="">
            </div>
        </div>
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="public/images/bg_gioithieu.png" alt="">
            </div>
        </div>
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="public/images/bg_gioithieu.png" alt="">
            </div>
        </div>       
    </div> 

  <h3>Vì sao nên chọn 8.tour</h3>
    <div class="why_choose-us">
        <div class="wrap_wcu">
            <div class="wrap_wcu-item">
                <img src="public/images/why_icon1.png" alt="" class="img_wcu">
                <h5>Mạng bán tour</h5>
                <p class="text_wcu">Ứng dụng công nghệ mới nhất</p>
            </div>
            <div class="wrap_wcu-item">
                <img src="public/images/why_icon2.png" alt="" class="img_wcu">
                <h5>Sản phẩm & Dịch vụ</h5>
                <p class="text_wcu">Đa dạng - Chất lượng - An toàn</p>
            </div>
            <div class="wrap_wcu-item">
                <img src="public/images/why_icon3.png" alt="" class="img_wcu">
                <h5>Giá cả</h5>
                <p class="text_wcu">Luôn có mức giá tốt nhất</p>
            </div>
            <div class="wrap_wcu-item">
                <img src="public/images/why_icon4.png" alt="" class="img_wcu">
                <h5>Đặt tour</h5>
                <p class="text_wcu">Dễ dàng & nhanh chóng chỉ với 3 bước</p>
            </div>
            <div class="wrap_wcu-item">
                <img src="public/images/why_icon5.png" alt="" class="img_wcu">
                <h5>Thanh toán</h5>
                <p class="text_wcu">An toàn & linh hoạt</p>
            </div>
            <div class="wrap_wcu-item">
                <img src="public/images/why_icon6.png" alt="" class="img_wcu">
                <h5>Hỗ trợ</h5>
                <p class="text_wcu">Hotline & trực tuyến (08h00 - 22h00)</p>
            </div>
        </div>
    </div>
    <!-- Liên hệ -->
    
 <footer>
        <h3 id="contact">Liên hệ với chúng tôi</h3>
        <div class="contact">
            <div class="contact_info">
                <h6>Công ty cổ phần du lịch 4 thành viên 8.tour</h6>
                <p>Tổng đài chăm sóc: <strong>18006868</strong></p>
                <p>Hotline: <strong>0912345678</strong></p>
                <p>Email: <strong>nhom8@gmail.com</strong></p>
                <p>Cơ sở 1: <strong>901 Bagby St, Houston, Hoa Kỳ</strong></p>
                <p>Cơ sở 2: <strong>20 W 34th St, New York, Hoa Kỳ</strong></p>
            </div>
            <div class="contact_rules">
                <h6>Chính sách và Quy định</h6>
                <p>Điều khoản và điều kiện</p>
                <p>Quy định về thanh toán</p>
                <p>Chính sách bảo mật thông tin</p>
            </div>
            <div class="contact_links">
                <h6>Mạng xã hội</h6>
                <div class="contact_group-icon">
                    <a href="#" class="contact_icon fb"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="contact_icon yt"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="contact_icon tt"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>  
        <div class="line"></div>
        <p style="font-size: 12px; font-weight: 700; margin: 3rem">@ Copy Right Nhóm 8/ 71DCTT23 2022</p>
    </footer>

    
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./public/js/app.js"></script>
    
</body>
</html>




