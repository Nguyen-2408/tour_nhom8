<main>
        <!-- search-tour -->
         <div class="bg_home">
                <img src="<?php echo _WEB_ROOT;?>/public/images/bg_home.png" alt="" class="bg_home-img">
        </div>
        <div>
            <p class="text_bg">Khám phá hành trình của bạn</p>
        </div>
        <!-- form search tour -->
        <div>
            <form action="<?php echo _WEB_ROOT;?>/danhsachtour/tim_kiem_tour" method = "POST">
                <div class="wrap_tb-tour">
                    <table class="tb-tour">
                        <tr>
                            <th>Tìm kiếm điểm du lịch</th>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Nhập điểm du lịch muốn đến" name ="txt_search_tour" class="input-search input_diemden" required></td>
                            <td > 
                                <div class="btn-search-tour">
                                <label for="search_tour" style="cursor: pointer;padding: 13px">
                                    <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                                </label>
                            </div>
                                <input type="submit" name="btn_tim_kiem_tour" id="search_tour" value="" hidden>
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
                        <img src="<?php echo _WEB_ROOT;?>/public/images/bg_gioithieu.png" alt="travel.io" class="gioithieu_img">
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
                            <a href="<?php echo _WEB_ROOT;?>/gioithieu"><button type="button" class="btn_gioithieu">Xem thêm</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </section> 
        <!-- tour yêu thích trong nước -->
      <div class="tour_trongnuoc">
            <h3>Điểm đến yêu thích trong nước</h3>
            <div class="wrap_img-tour">
                <?php 
               
                if(isset($data['dd_trongnuoc'])) {
                    $count = 0;
                    while($row  = mysqli_fetch_assoc($data['dd_trongnuoc'])){
                        if($count < 4){
                            ?>
                            <div class="img_tour">
                                <h4><?php echo $row['tendiadiem'] ?></h4>
                                <div>
                                <!-- <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a> -->
                            </div>
                            <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                            <a href="<?php echo _WEB_ROOT;?>/danhsachtour/get_tour/<?php echo $row['id'] ?>" class="tour_detail">Xem chi tiết</a>
                            </div>
                            <?php
                        $count++;
                        }
                    }
                    
                }
                
                ?>
            </div>
        </div> 
                <div class="wrap-btn">
                <a href="<?php echo _WEB_ROOT;?>/danhsachtour"><button type="button" class="btn_vall">Xem tất cả</button></a>
                </div> 
<!-- tour nước ngoài -->
             <div class="tour_nuocngoai">
                <h3>Điểm đến yêu thích nước ngoài</h3>
                <div class="wrap_img-tour">
                <?php 
                if(isset($data['dd_nuocngoai'])) {
                    $count = 0;
                    while($row  = mysqli_fetch_assoc($data['dd_nuocngoai'])){
                        if($count < 4){
                        ?>
                         <div class="img_tour">
                            <h4><?php echo $row['tendiadiem'] ?></h4>
                            <div>
                                <!-- <a href="#" class="heart_link"><i class="fa-regular fa-heart"></i></a> -->
                            </div>
                            <img src="https://cdn1.ivivu.com/iVivu/2021/11/15/16/con-dao-370x395.png" alt="" class="img_tour-trongnuoc">
                            <a href="<?php echo _WEB_ROOT;?>/danhsachtour/get_tour/<?php echo $row['id'] ?>" class="tour_detail">Xem chi tiết</a>
                            </div>
                        <?php
                    }
                    $count++;
                }
                }
                ?>      
                </div>
            </div>
                <div class="wrap-btn">
                    <a href="<?php echo _WEB_ROOT;?>/danhsachtour"><button type="button" class="btn_vall">Xem tất cả</button></a>
                </div>
            </main>
            <div id="discount"></div>
            <!-- Ưu đãi -->

<h3>Ưu đãi</h3>
    <div class="slider_discount">
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="<?php echo _WEB_ROOT;?>/public/images/bg_gioithieu.png" alt="">
            </div>
        </div>
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="<?php echo _WEB_ROOT;?>/public/images/bg_gioithieu.png" alt="">
            </div>
        </div>
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="<?php echo _WEB_ROOT;?>/public/images/bg_gioithieu.png" alt="">
            </div>
        </div>
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="<?php echo _WEB_ROOT;?>/public/images/bg_gioithieu.png" alt="">
            </div>
        </div>
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="<?php echo _WEB_ROOT;?>/public/images/bg_gioithieu.png" alt="">
            </div>
        </div>
        <div class="slider_discount-item">
            <div class="img_discount">
                <img src="<?php echo _WEB_ROOT;?>/public/images/bg_gioithieu.png" alt="">
            </div>
        </div>       
    </div> 

  <h3>Vì sao nên chọn 8.tour</h3>
    <div class="why_choose-us">
        <div class="wrap_wcu">
            <div class="wrap_wcu-item">
                <img src="<?php echo _WEB_ROOT;?>/public/images/why_icon1.png" alt="" class="img_wcu">
                <h5>Mạng bán tour</h5>
                <p class="text_wcu">Ứng dụng công nghệ mới nhất</p>
            </div>
            <div class="wrap_wcu-item">
                <img src="<?php echo _WEB_ROOT;?>/public/images/why_icon2.png" alt="" class="img_wcu">
                <h5>Sản phẩm & Dịch vụ</h5>
                <p class="text_wcu">Đa dạng - Chất lượng - An toàn</p>
            </div>
            <div class="wrap_wcu-item">
                <img src="<?php echo _WEB_ROOT;?>/public/images/why_icon3.png" alt="" class="img_wcu">
                <h5>Giá cả</h5>
                <p class="text_wcu">Luôn có mức giá tốt nhất</p>
            </div>
            <div class="wrap_wcu-item">
                <img src="<?php echo _WEB_ROOT;?>/public/images/why_icon4.png" alt="" class="img_wcu">
                <h5>Đặt tour</h5>
                <p class="text_wcu">Dễ dàng & nhanh chóng chỉ với 3 bước</p>
            </div>
            <div class="wrap_wcu-item">
                <img src="<?php echo _WEB_ROOT;?>/public/images/why_icon5.png" alt="" class="img_wcu">
                <h5>Thanh toán</h5>
                <p class="text_wcu">An toàn & linh hoạt</p>
            </div>
            <div class="wrap_wcu-item">
                <img src="<?php echo _WEB_ROOT;?>/public/images/why_icon6.png" alt="" class="img_wcu">
                <h5>Hỗ trợ</h5>
                <p class="text_wcu">Hotline & trực tuyến (08h00 - 22h00)</p>
            </div>
        </div>
    </div>