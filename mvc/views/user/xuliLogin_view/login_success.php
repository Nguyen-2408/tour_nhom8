<a href="" class="cart_amount">
    <i class="fa-solid fa-cart-shopping"></i>                   
</a>  
<div class="wrap_user-info">
    <div class="user_info">
    <?php
        if(isset($_SESSION['user_id'])){
            if($_SESSION['avatar'] == '') {
                echo '<img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="" class="user_image">';
            }else {
                echo '<img src="'._WEB_ROOT.'/images/avatars/'.$_SESSION['avatar'].'" alt="" class="user_image">';
            }
        }
    
    ?>
        <p class="user_name"><?php if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
                                            echo $_SESSION['username'];
                                            } ?></p>
    </div>
        
    <div class="nav_user-info">
        <ul class="nav_user-list">
            <li class="nav_user-item"><a href="" class="nav_user-link">Thông tin tài khoản</a></li>
            <li class="nav_user-item"><a href="" class="nav_user-link">Thông tin đặt tour</a></li>
            <li class="nav_user-item"><a href="" class="nav_user-link">Phòng khách sạn</a></li>
            <li class="nav_user-item"><a href="" class="nav_user-link">Vé máy bay</a></li>
            <li class="nav_user-item"><a href="<?php echo _WEB_ROOT;?>/home/logout" class="nav_user-link">Đăng xuất</a></li>
        </ul>
    </div>
</div>

