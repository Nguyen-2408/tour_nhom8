<?php
    class Signup extends controller {
        function index() {

            $this->check_user_sign();
            $this-> view('MasterLayout', [
                'page' => 'trang_chu',
                'showSignup' => '',

            ]);
        }

        function check_user_sign(){
            if(isset($_POST['btnSignup'])){

                $this->user = $this->model('signup_model');

                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];

                $kq = $this->user->check_user($username, $email);

                if(mysqli_num_rows($kq) > 0) {
                    $row = mysqli_fetch_assoc($kq);
                    if($username == $row['username']){
                        $_SESSION['msg_signup'] = 'Tên tài khoản đã được dùng';
                        $_SESSION['type_msg'] = 'error';
                    } else if($email == $row['email']){ 
                        $_SESSION['msg_signup'] = 'Email đã được dùng';
                        $_SESSION['type_msg'] = 'error';
                    }
                }else {
                    if(strlen($username) < 2 || strlen($username) > 19) {
                        $_SESSION['msg_signup'] = 'Tên tài khoản chỉ từ 3 đến 18 kí tự';
                        $_SESSION['type_msg'] = 'error';
                    } else if(strlen($password) < 3){
                        $_SESSION['msg_signup'] = 'Mật khẩu phải từ 3 kí tự';
                        $_SESSION['type_msg'] = 'error';
                    } else if($password != $cpassword){
                        $_SESSION['msg_signup'] = 'Xác nhận mật khẩu không khớp';
                        $_SESSION['type_msg'] = 'error';
                    }
                    else{
                        $add_user = $this->user->add_user($username, $email,$password);
                        $_SESSION['msg_signup_success'] = 'Đăng kí thành công';
                        $_SESSION['type_msg'] = 'success';
                        $this-> view('MasterLayout', [
                            'page' => 'trang_chu',
                            'showLogin' => ''
                        ]);
                    }
                }
            }
        }
    }
?>