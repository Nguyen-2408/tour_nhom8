<?php
    class Home extends controller {
        public $diadiem;
        public $user;
        public $ud_user;
        function __construct(){
            $this->diadiem = $this->model('diadiemmodel');
        }
        function index() {
            
            $dd_trongnuoc = $this->diadiem->get_dia_diem_trong_nuoc();
            $dd_nuocngoai = $this->diadiem->get_dia_diem_nuoc_ngoai();

            $this->view('MasterLayout',[
                'page' => 'trang_chu',
                'dd_trongnuoc' => $dd_trongnuoc,
                'dd_nuocngoai' => $dd_nuocngoai
            ]);
        }
        
        function user_info(){
            $this->view('MasterLayout', [
                'page' => 'user_info/thong_tin_user'
            ]);
        }
        
        function update_user() {
            $this->ud_user = $this->model('user_info_model');
            $this->user = $this->model('home_model');
        if(isset($_POST['btn_update_user'])) {
                $id_user = $_SESSION['user_id'];
                $email = $_POST['ud_email'];
                $sdt = $_POST['ud_sdt'];
                $diachi = $_POST['ud_diachi'];
                if(isset($_SESSION['avatar'])){
                    $fileanh_path = $_SESSION['avatar'];
                }else {
                    $fileanh_path = basename($_FILES['change_avatar']['name']);
                }
                $target_dir = './public/images/avatars/';
                $target_file = $target_dir .$fileanh_path;
                $target_tmpName = $_FILES["change_avatar"]["tmp_name"];
                
                $user_info = $this->user->qltkAll();
                $update = $this->ud_user->update_user($id_user,$email, $sdt, $fileanh_path, $diachi);
                    if($user_info){
                        while($row = mysqli_fetch_assoc($user_info)){
                            if($fileanh_path == $row['avatar']){
                                !move_uploaded_file($target_tmpName, $target_file);
                            }else{
                                move_uploaded_file($target_tmpName, $target_file);
                            }
                        }
                        if($update){
                            if($fileanh_path != ""){
                                $_SESSION['avatar'] = $fileanh_path;
                            }else {
                                while($row = mysqli_fetch_assoc($user_info)){
                                    $_SESSION['avatar'] = $row['avatar'];
                                }
                            }
                            $_SESSION['email'] = $email;
                            $_SESSION['sdt'] = $sdt;
                            $_SESSION['diachi'] = $diachi;
                                $this->view('MasterLayout', [
                                    'page' => 'user_info/thong_tin_user'
                                ]);
                            }else {
                                $this->view('MasterLayout', [
                                    'page' => 'user_info/thong_tin_user',
                                    'error' => ''
                                ]);
                            }          
                }
            }
        }

        function logout() {
            session_destroy();
            header('location: '._WEB_ROOT.'/');
        }
    }
?>