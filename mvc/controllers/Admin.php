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

        /* Tìm kiếm user */
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
                header('location: '._WEB_ROOT.'/admin');
            }
        }
        /* hiển thị form sửa */
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
        /* update sau khi sửa */
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
        }
        /* Xóa user */
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
           
            $this->view('admin_layout',[
                'admin_view' => 'admin_qltour',
                'qltour' => $qltour
            ]);
        }

        /* Hiển thị form thêm tour */
        function form_add_tour(){
            $this->admin = $this->model('tourmodel');
            $qltour = $this->admin->db_qltour();

            $this->view('admin_layout',[
                'admin_view' => 'admin_qltour',
                'qltour' => $qltour,
                'form_add_tour'=> ''
            ]);
        }


        /* Thêm tour */
        function add_tour() {
            $this->admin = $this->model('tourmodel');
            if(isset($_POST['btn_add-tour'])) {
                $tourname = $_POST['tourname'];
                $songay = $_POST['songay'];
                $info_tour = $_POST['info_tour'];
                $gianguoilon = $_POST['gianguoilon'];
                $giatreem = $_POST['giatreem'];
                $anhtour = basename($_FILES['anhtour']['name']);

                $target_dir = './public/images/img_web/';
                $target_file = $target_dir . $anhtour;
                $target_tmpName = $_FILES["anhtour"]["tmp_name"];
                move_uploaded_file($target_tmpName, $target_file );
                
                $this->admin->add_tour($tourname, $anhtour, $songay, $info_tour, $gianguoilon, $giatreem);
                header('location: '._WEB_ROOT.'/admin/qltour');
            }else {
                header('location: '._WEB_ROOT.'/admin/qltour');
            }
        }

        /* Tìm kiếm tour */
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
        /* Hiện form sửa tour */
        function edit_tour($id_tour=''){
            $this->admin = $this->model('tourmodel');
            $qltour = $this->admin->db_qltour();
            $tour_info = $this->admin->tour_info($id_tour);

            $this->view('admin_layout',[
                'admin_view' => 'admin_qltour',
                'qltour' => $qltour,
                'edit-tour'=> '',
                'tour_info' =>$tour_info
            ]);
        }

        /* Update tour */

        function update_tour($id_tour='') {
            $this->admin = $this->model('tourmodel');

            if(isset($_POST['btn_edit-tour'])){               
                $tourname_ud = $_POST['tourname_ud'];
                $songay_ud = $_POST['songay_ud'];
                $info_tour_ud = $_POST['info_tour_ud'];
                $gianguoilon_ud = $_POST['gianguoilon_ud'];
                $giatreem_ud = $_POST['giatreem_ud'];
                if(empty($_FILES['anhtour_ud']['name'])){
                    $anhtour_ud = $_SESSION['img_tour'];

                }else {
                    $anhtour_ud = basename($_FILES['anhtour_ud']['name']);
                }

                $target_dir = './public/images/img_web/';
                $target_file = $target_dir . $anhtour_ud;
                $target_tmpName = $_FILES["anhtour_ud"]["tmp_name"];
                move_uploaded_file($target_tmpName, $target_file );
                
                
                $tour_ud = $this->admin->edit_tour($id_tour, $tourname_ud, $anhtour_ud, $songay_ud, $info_tour_ud, $gianguoilon_ud, $giatreem_ud);
                header('location: '._WEB_ROOT.'/admin/qltour');
                        
            }
        }
        /* Xóa tour */
        function del_tour($id_tour) {
            $this->admin = $this->model('tourmodel');
            
            $this->admin->del_tour($id_tour);
            
            header('location: '._WEB_ROOT.'/admin/qltour');
        }


        /* Xử lí đơn */
        /* hiển thị tất cả đơn */
        function qldon() {
            $this->admin = $this-> model('don_dat_tour');
            $qldon = $this->admin->get_all_don();
            $this->view('admin_layout', [
                'admin_view' => 'admin_qldon',
                'qldon' => $qldon
            ]);
        }

        /* tìm kiếm đơn */
        function search_don(){
            if(isset($_POST['btn_search-don'])) {
                $tentour = $_POST['tentour'];
                $this->admin = $this->model('don_dat_tour');
                $don_tour = $this->admin->search_don($tentour);

                if(mysqli_num_rows($don_tour) > 0){
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qldon',
                        'don_tour' => $don_tour
                    ]);
                }else{
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qldon',
                        'no-result' =>  ''
                    ]);
                }
            }
        }


        /* Xóa đơn */
        function del_don($id_don) {
            $this->admin = $this->model('don_dat_tour');
            
            $this->admin->del_don($id_don);
            
            header('location: '._WEB_ROOT.'/admin/qldon');
        }

    }
?>