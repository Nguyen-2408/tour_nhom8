<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo _WEB_ROOT;?>/public/images/8_Tour.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/datvemb.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/dstour.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/dat_tour.css">
<!--     <link rel="stylesheet" href="<?php /* echo _WEB_ROOT; */?>/public/css/thongtindattour.css"> -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/datkhachsan.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/gioithieu.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/thongtinuser.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/main.css">
    
    <title><?php 
        switch($data['page']) {
            case 'trang_chu':
                echo "Trang chủ";
                break;
            case 'gioithieu':
                echo "Giới thiệu";
                break;
            case 'user_info/menu_user-info':
                echo "Thông tin tài khoản";
                break;
            case 'danh_sach_tour':
                echo "Danh sách tour";
                break;
            case 'dat_tour':
                echo "Đặt tour";
                break;
        }
    ?></title>
            
</head>
<body>
    <style>
    .gif_loading{
        height: 300px;
    }
    .loader.fade_out {
        animation: fade 1s alternate;
    }
    
    @keyframes fade {
        to{
            opacity: 0;
        }
    }
    .loader {
        position: fixed;
        top:0;
        left:0;
        z-index: 99999999;
        width: 100%;
        height: 100%;
        display:flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(243, 243, 243);
    }

    
        </style>
     <!-- Loading -->
    <div class="loader">
        <img src="<?php echo _WEB_ROOT;?>/public/images/gif_loading.gif" alt="" class="gif_loading">
    </div>

    <!-- header -->
    <?php include_once './mvc/views/user/header.php';?>
    <?php
        if(isset($_SESSION['msg_vemaybay'])) {
            echo '<div class="msg '.$_SESSION['type_msg'].'">
                    <p>'.$_SESSION['msg_login'].'</p>
                </div>';   
        }
    ?>  
    <!-- Login -->
    <?php
        if(!isset($_SESSION['user_id'])){
            include_once './mvc/views/user/login.php';
            include_once './mvc/views/user/signup.php';
        }
    ?>  
    

    <!-- Content -->
    <?php include_once './mvc/views/user/'.$data['page'].'.php'; ?>
    
    <!-- footer -->
    <?php include_once './mvc/views/user/footer.php'; ?>

    <script type="text/javascript"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!--   <script src="<?php/*  echo _WEB_ROOT; */?>/public/js/datvemb.js"></script> -->
    <script src="<?php echo _WEB_ROOT;?>/public/js/main.js"></script>

    
</body>
</html>




