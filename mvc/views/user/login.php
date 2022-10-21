<!-- Login -->
<div class="card__login-event <?php if(isset($data['showLogin'])) {
                                        echo $data['showLogin'];
                                    }else {
                                        echo "hidden";
                                    } ?>">
        <div class="overlay__card-login">
            <?php
                if(isset($_SESSION['msg_vemaybay']) && isset($_SESSION['type_msg'])){
                    echo '<div class="msg_home '.$_SESSION['type_msg'].'">
                            <p>'.$_SESSION['msg_vemaybay'].'</p>
                        </div>'; 
                        unset($_SESSION['msg_vemaybay']);       
                }
            ?>
            <div class="login__card">
            <?php if(isset($_SESSION['msg_login']) && isset($_SESSION['type_msg'])){
                echo '<div class="msg_log '.$_SESSION['type_msg'].'">
                        <p>'.$_SESSION['msg_login'].'</p>
                    </div>';
                    unset($_SESSION['msg_login']);
                } 
                if(isset($_SESSION['msg_signup_success']) && isset($_SESSION['type_msg']) && $_SESSION['type_msg'] == "success"){
                    echo '<div class="msg_log '.$_SESSION['type_msg'].'">
                        <p>'.$_SESSION['msg_signup_success'].'</p>
                    </div>';
                    unset($_SESSION['msg_signup_success']);
                }   

            ?>
                <div class="login__exit">
                    <a href="<?php echo _WEB_ROOT;?>/"><i class="fa-solid fa-circle-xmark"></i></a>
                </div>
                <p class="login_text">Đăng nhập</p>
                
                <form action="<?php echo _WEB_ROOT;?>/login" class="login__form" method="POST">
                    <div class="form__group-login">
                        <input type="text" placeholder="Tên tài khoản" class="input__login" name ="username" required value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>">
                    </div>
                    <div class="form__group-login">
                        <input type="password" placeholder="Mật khẩu" class="input__login input__password" name="password" required value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>">
                        
                        <div class="eye-close"><i class="fa-solid fa-eye-slash "></i></div>         
                        <div class="eye-open hidden"><i class="fa-solid fa-eye"></i></div>     
                    </div>
                    <div class="form__group-login">
                        <button type="submit" name="btnLogin" class="card__btn-login">Đăng nhập</button>
                    </div>
                </form>
               
                <p class="text__no-acc">Bạn chưa có tài khoản <a href="<?php echo _WEB_ROOT;?>/signup" class="link__signup">Đăng kí ngay</a></p>
            </div>
        </div>
    </div>
