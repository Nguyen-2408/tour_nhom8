

    <div class="user-info-detail">  
        <div class="title_info">
            <h1>Thông tin tài khoản</h1>
        </div>
        <div class="menu_info">
            <ul class="menu_info-list">
                <a href="<?php echo _WEB_ROOT;?>/home/user_info" class="menu_info-link active" ><li class="menu_info-item <?php if(isset($data['active_user_info'])){ echo 'active';} ?>">Quản lí tài khoản</li></a>
                <a href="<?php echo _WEB_ROOT;?>/thongtindattour" class="menu_info-link"><li class="menu_info-item <?php if(isset($data['active_tour_da_dat'])){ echo 'active';} ?>">Tour đã đặt</li></a>
            </ul>
        </div>

        <?php include_once './mvc/views/user/user_info/'.$data['page_user-info'].'.php'; ?>
    </div>
