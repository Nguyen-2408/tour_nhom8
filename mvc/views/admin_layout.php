<?php
    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/admin.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT;?>/public/css/main.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="head_menu">
            <div class="">
                <a href="<?php echo _WEB_ROOT.'/admin'?>" class="text_logo">Admin 8.tour</a>
            </div>    
            
<div class="wrap_user-info">
    <div class="user_info">
    <?php
            if(isset($_SESSION['avatar'])) {
                ?>
                <img src="<?php echo _WEB_ROOT.'/public/images/avatars/'.$_SESSION['avatar'];?>" alt="" class="user_image">
            <?php
            }
    ?>
        <p class="user_name"><?php if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
                                            echo $_SESSION['username'];
                                            } ?></p>
    </div>
        
    <a href="<?php echo _WEB_ROOT;?>/home/logout"  style ="position: absolute;
                                                            top: 50%;
                                                            right: 30px;
                                                            font-size: 16px;
                                                            font-weight: 700;
                                                            text-decoration: none;
                                                            color: #000;
                                                            background-color: #ccc;
                                                            padding: 5px 10px;
                                                            border-radius: 10px;">Thoát</a>
</div>


        </div>

        <div class="nav_menu" style="margin-top:0;">
            <ul class="list_menu">
                <a href="<?php echo _WEB_ROOT.'/admin';?>" class="menu_link"><li class="list_item">Quản lí tài khoản </li></a>
                <a href="<?php echo _WEB_ROOT.'/admin/qltour';?>" class="menu_link"><li class="list_item">Quản lí thông tin tour</li></a>
                <a href="<?php echo _WEB_ROOT.'/admin';?>" class="menu_link"><li class="list_item">Quản lí đơn</li></a>
                
            </ul>
        </div>
    </header>
    
    <?php if(isset($data['admin_view'])){
        include_once './mvc/views/admin/'.$data['admin_view'].'.php';
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    <?php
}else {
    header('location: '._WEB_ROOT.'');
}
?>