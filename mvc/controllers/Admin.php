<?php
    class Admin extends controller {
        public $admin;
       
        function index(){
            $this->admin = $this->model('home_model');
            $qltk = $this->admin->qltkAll();

            $this->view('admin_layout',[
                'admin_view' => 'admin_qltk',
                'qltk' => $qltk
            ]);
        }

        /* Xử lí user */
        
        function edit_user($id_user=''){
            $this->admin = $this->model('home_model');
            $user_info = $this->admin->qltk_user($id_user);
            $qltk = $this->admin->qltkAll();
            
            $this->view('admin_layout',[
                'admin_view' => 'admin_qltk',
                'qltk' => $qltk,
                'user_info' => $user_info,
                'edit_user' => ''
            ]);
        }

        function update_user($id_user='') {
            $this->admin = $this->model('home_model');

            if(isset($_POST['btn_edit-user'])){               
                $username_ud = $_POST['username_ud'];
                $email_ud = $_POST['email_ud'];
                $sdt_ud = $_POST['sdt_ud'];
                $diachi_ud = $_POST['diachi_ud'];
               
                $user_ud = $this->admin->edit_user($id_user, $username_ud, $email_ud, $sdt_ud, $diachi_ud);
                header('location: '._WEB_ROOT.'/admin');
                        
            }

            if(isset($_POST['btn_cancel'])) {
                header('location: '._WEB_ROOT.'/admin');
            }
        }
        
        function search_user() {
            if(isset($_POST['btn_search-user'])){
                $username = $_POST['username'];
                $this->admin = $this->model('home_model');
                $kq = $this->admin->search_user($username);
               
                if(mysqli_num_rows($kq) > 0){
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qltk',
                        'kq' => $kq
                    ]);
                } else {
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qltk',
                        'no-result' => ''
                    ]);
                }
            }else {

            }
        }
        function del_user($id_user) {
            $this->admin = $this->model('home_model');
            $this->admin->del_user($id_user);
            
            header('location: '._WEB_ROOT.'/admin');
        }

        /* Xử lí tour */
        /* -Lấy ra tất cả thông tin tour */

        function qltour() {
            $this->admin = $this->model('tourmodel');
            $qltour = $this->admin->db_qltour();
            $this->admin = $this->model('diadiemmodel');
            $kq =  $this->admin->get_all_dia_diem();

            $this->view('admin_layout',[
                'admin_view' => 'admin_qltour',
                'qltour' => $qltour,
                'qldiadiem' => $kq
            ]);
        }

        function search_tour() {
            if(isset($_POST['btn_search-tour'])){
                $tourname = $_POST['tourname'];
                $this->admin = $this->model('home_model');
                $kq = $this->admin->search_tour($tourname);
               
                if(mysqli_num_rows($kq) > 0){
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qltour',
                        'kq' => $kq
                    ]);
                } else {
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qltour',
                        'no-result' => ''
                    ]);
                }
            }else {
                header('location: '._WEB_ROOT.'/admin/qltour');
            }
        }

        

        /* Xử lí đơn */
        function qldon() {
            $this->admin = $this-> model('don_dat_tour');
            $qldon = $this->admin->get_all_don();
            $this->view('admin_layout', [
                'admin_view' => 'admin_qldon',
                'qldon' => $qldon
            ]);
        }

    }
?>