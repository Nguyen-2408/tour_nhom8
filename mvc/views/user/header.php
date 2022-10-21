<header>
        <div class="head_menu">
            <div class="">
                <a href="<?php echo _WEB_ROOT;?>" class="text_logo">8.tour</a>
            </div>    
            <?php if(isset($_SESSION['user_id'])){  
                include_once './mvc/views/user/xuliLogin_view/login_success.php';// hiển thị user
            }else{
                include_once './mvc/views/user/xuliLogin_view/gr_btn.php'; //hiển thị nút đăng nhập, đăng kí
            } ?> 
                     
        </div>

        <div class="nav_menu">
            <ul class="list_menu">
                <a href="<?php echo _WEB_ROOT;?>" class="menu_link"><li class="list_item">Trang chủ</li></a>
                <a href="<?php echo _WEB_ROOT;?>" class="menu_link"><li class="list_item">Giới thiệu</li></a>
                <a href="<?php echo _WEB_ROOT;?>/danhsachtour" class="menu_link"><li class="list_item">Tour</li></a>
                <a href="<?php echo _WEB_ROOT;?>" class="menu_link"><li class="list_item">Khách sạn</li></a>
                <li class="list_item">Phương tiện
                    <div class="sub_menu">
                        <ul class="sub_menu-list">
                            <a href="<?php echo _WEB_ROOT;?>/vemaybay/dat_ve_mb" class="sub_menu-item"><li>Vé máy bay</li></a>
                            <a href="" class="sub_menu-item"><li>Ô tô</li></a>
                        </ul>
                    </div>
                </li>
                <a href="<?php echo _WEB_ROOT;?>" class="menu_link"><li class="list_item">Liên hệ</li></a>
                
            </ul>
        </div>
    </header>