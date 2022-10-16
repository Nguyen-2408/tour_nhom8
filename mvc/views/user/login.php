<!-- Login -->
<div class="card__login-event <?php if(isset($data['showLogin'])) {
                                        echo $data['showLogin'];
                                    }else {
                                        echo "hidden";
                                    } ?>">
        <div class="overlay__card-login">
            <div class="login__card">
            <?php 
            if(isset($data['msg'])){
                if($data['msg'] == 'signup_success'){
        ?>
        <div class="msg success">
            <p>Đăng kí thành công. Vui lòng đăng nhập tại đây</p>
        </div>
        <?php
                }
                if($data['msg'] == 'login_fail'){
                    ?>
                        <div class="msg error">
                            <p>Tài khoản hoặc mật khẩu không chính xác!</p>
                        </div>
                    <?php
                }
            } 
        ?>
                <div class="login__exit">
                    <a href="<?php echo _WEB_ROOT;?>/"><i class="fa-solid fa-circle-xmark"></i></a>
                </div>
                <p class="login_text">Đăng nhập</p>
                
                <form action="<?php echo _WEB_ROOT;?>/home/login_excute" class="login__form" method="POST">
                    <div class="form__group-login">
                        <input type="text" placeholder="Tên tài khoản" class="input__login" name ="username" required value="<?php if(isset($data['username'])){echo $data['username'];} ?>">
                    </div>
                    <div class="form__group-login">
                        <input type="password" placeholder="Mật khẩu" class="input__login input__password" name="password" required value="<?php if(isset($data['password'])){echo $data['password'];} ?>">
                        
                        <div class="eye-close"><i class="fa-solid fa-eye-slash "></i></div>         
                        <div class="eye-open hidden"><i class="fa-solid fa-eye"></i></div>     
                    </div>
                    <div class="form__group-login">
                        <button type="submit" name="btnLogin" class="card__btn-login">Đăng nhập</button>
                    </div>
                </form>
               
                <p class="text__no-acc">Bạn chưa có tài khoản <a href="<?php echo _WEB_ROOT;?>/home/signup" class="link__signup">Đăng kí ngay</a></p>
            </div>
        </div>
    </div>

    
        <!-- Đăng kí thành công -->
       

        <!-- Lỗi đăng nhập -->
    