<div class="card__signup-event <?php if(isset($data['showSignup'])) {
                                        echo $data['showSignup'];
                                    }else {
                                        echo "hidden";
                                    }?>">
        <div class="overlay__card-signup">
            <div class="signup__card">
            <?php 
            if(isset($data['msg'])){
                if($data['msg'] == 'username_already_exist'){
            ?>
            <div class="msg error">
                <p>Tên tài khoản đã có người sử dụng!</p>
            </div>
            <?php
                }
                if($data['msg'] == 'email_already_exist'){
                    ?>
                        <div class="msg error">
                            <p>Email đã có người sử dụng</p>
                        </div>
                    <?php
                }if($data['msg'] == 'pass_not_match'){
                    ?>
                        <div class="msg error">
                            <p>Xác nhận mật khẩu không khớp! Kiểm tra lại</p>
                        </div>
                    <?php
                }if($data['msg'] == 'signup_fail') {
                    ?>
                        <div class="msg error">
                            <p>Đăng kí thất bại</p>
                        </div>
                    <?php
                }
            } 
            ?>
                <div class="signup__exit">
                    <a href="<?php echo _WEB_ROOT;?>/"><i class="fa-solid fa-circle-xmark"></i></a>
                </div>
                <p class="signup_text">Đăng kí</p>
                <form action="<?php echo _WEB_ROOT;?>/home/signup_excute" class="signup__form" method="POST">
                    <div class="form__group-signup">
                        <input type="text" placeholder="Tên tài khoản" class="input__signup" name="username" required value="<?php if(isset($data['username'])){echo $data['username'];} ?>">
                    </div>
                    <div class="form__group-signup">
                        <input type="email" placeholder="Email" class="input__signup" name="email" required value="<?php if(isset($data['email'])){echo $data['email'];} ?>">
                    </div>
                    <div class="form__group-login">
                        <input type="password" placeholder="Mật khẩu" class="input__signup input__password-signup" required name="password" value="<?php if(isset($data['password'])){echo $data['password'];} ?>">
    
                        <div class="signup__eye-close"><i class="fa-solid fa-eye-slash "></i></div>         
                        <div class="signup__eye-open hidden"><i class="fa-solid fa-eye"></i></div>     
                    </div>
                    <div class="form__group-login">
                        <input type="password" placeholder="Nhập lại mật khẩu" class="input__signup input__password-again" required name="cpassword" value="<?php if(isset($data['cpassword'])){echo $data['cpassword'];} ?>">
    
                        <div class="signup__eye-close1"><i class="fa-solid fa-eye-slash "></i></div>         
                        <div class="signup__eye-open1 hidden"><i class="fa-solid fa-eye"></i></div>     
                    </div>
                    <div class="form__group-signup">
                        <button type="submit" name="btnSignup" class="card__btn-signup">Đăng kí</button>
                    </div>
                </form>
                <p class="text__have-acc">Đã có tài khoản <a href="<?php echo _WEB_ROOT;?>/home/login" class="link__login">Đăng nhập tại đây</a></p>
            </div>
        </div>
    </div>
