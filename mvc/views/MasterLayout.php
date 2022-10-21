<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/datvemb.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/dstour.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/main.css">
    
    <title>Trang chủ</title>
</head>
<body>

<!-- Thông báo -->
                


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

    
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo _WEB_ROOT;?>/public/js/main.js"></script>
    <script src="<?php echo _WEB_ROOT;?>/public/js/datvemb.js"></script>

    
</body>
</html>




