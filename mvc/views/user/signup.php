<div class="card__signup-event <?php if(isset($data['showSignup'])) {
                                        echo $data['showSignup'];
                                    }else {
                                        echo "hidden";
                                    }?>">
        <div class="overlay__card-signup">
            <div class="signup__card">
            <?php if(isset($_SESSION['msg_signup']) && isset($_SESSION['type_msg'])){
                echo '<div class="msg_log '.$_SESSION['type_msg'].'">
                        <p>'.$_SESSION['msg_signup'].'</p>
                    </div>';
                
                    unset($_SESSION['msg_signup']);
                } 
                ?>
                <div class="signup__exit">
                    <a href="<?php echo _WEB_ROOT;?>/"><i class="fa-solid fa-circle-xmark"></i></a>
                </div>
                <p class="signup_text">Đăng kí</p>
                <form action="<?php echo _WEB_ROOT;?>/signup" class="signup__form" method="POST">
                    <div class="form__group-signup">
                        <input type="text" placeholder="Tên tài khoản" class="input__signup" name="username" required value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>">
                    </div>
                    <div class="form__group-signup">
                        <input type="email" placeholder="Email" class="input__signup" name="email" required value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
                    </div>
                    <div class="form__group-login">
                        <input type="password" placeholder="Mật khẩu" class="input__signup input__password-signup" required name="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>">
    
                        <div class="signup__eye-close"><i class="fa-solid fa-eye-slash "></i></div>         
                        <div class="signup__eye-open hidden"><i class="fa-solid fa-eye"></i></div>     
                    </div>
                    <div class="form__group-login">
                        <input type="password" placeholder="Nhập lại mật khẩu" class="input__signup input__password-again" required name="cpassword" value="<?php if(isset($_POST['cpassword'])){echo $_POST['cpassword'];} ?>">
    
                        <div class="signup__eye-close1"><i class="fa-solid fa-eye-slash "></i></div>         
                        <div class="signup__eye-open1 hidden"><i class="fa-solid fa-eye"></i></div>     
                    </div>
                    <div class="form__group-signup">
                        <button type="submit" name="btnSignup" class="card__btn-signup">Đăng kí</button>
                    </div>
                </form>
                <p class="text__have-acc">Đã có tài khoản <a href="<?php echo _WEB_ROOT;?>/login" class="link__login">Đăng nhập tại đây</a></p>
            </div>
        </div>
    </div>
