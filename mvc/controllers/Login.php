
<?php
    class Login extends controller {
        public $user;
        function index() {            
            $this->check_user_log();

            $this->view('MasterLayout',[
                'page' => 'trang_chu',
                'showLogin' => ''
            ]);
        }

        function check_user_log() {
            if(isset($_POST['btnLogin'])){

                $this->user = $this->model('login_model');

                $username = $_POST['username'];
                $password = $_POST['password'];

                $kq = $this->user->check_user($username, $password);

                if(mysqli_num_rows($kq) > 0) {
                    $row = mysqli_fetch_assoc($kq);
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['role'] = $row['role'];                      
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['sdt'] = $row['dienthoai'];
                    $_SESSION['diachi'] = $row['diachi'];
                    $_SESSION['avatar'] = $row['avatar'];
                    if($_SESSION['role'] == 1){
                        header('location: '._WEB_ROOT.'/admin');
                    }else {
                        header('location:'._WEB_ROOT.'/');
                    } 
                    
                }else {      
                    $_SESSION['msg_login'] = 'Tài khoản hoặc mật khẩu không chính xác';
                    $_SESSION['type_msg'] = 'error';
                }
            }
        }
    }
    
?>