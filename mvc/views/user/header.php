<header>
        <div class="head_menu">
            <div class="">
                <a href="#" class="text_logo">8.tour</a>
            </div>    
            <?php if(isset($_SESSION['user_id'])){  
                include_once './mvc/views/user/xuliLogin_view/login_success.php';// hiển thị user
            }else{
                include_once './mvc/views/user/xuliLogin_view/gr_btn.php'; //hiển thị nút đăng nhập, đăng kí
            } ?> 
                     
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
                            <a href="<?php echo _WEB_ROOT;?>/vemaybay/dat_ve_mb" class="sub_menu-item"><li>Vé máy bay</li></a>
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