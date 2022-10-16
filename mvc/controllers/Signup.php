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
                        $_SESSION['msg'] = 'Tên tài khoản đã được dùng';
                    } else if($email == $row['email']){ 
                        $_SESSION['msg'] = 'Email đã được dùng';
                    }
                }else {
                    if(strlen($username) < 5 || strlen($username) > 18) {
                        $_SESSION['msg'] = 'TK chỉ từ 5 đến 18 kí tự';
                    } else if(strlen($password) < 6){
                        $_SESSION['msg'] = 'Mk phải từ 6 kí tự';
                    } else if($password != $cpassword){
                        $_SESSION['msg'] = 'Pass not match';
                    }
                    else{
                        $add_user = $this->user->add_user($username, $email,$password);
                        $_SESSION['msg'] = 'Đăng kí thành công';
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