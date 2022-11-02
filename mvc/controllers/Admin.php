<?php
    class Admin extends controller {
        public $admin;
        function __construct() {
            $this->admin = $this->model('diadiemmodel');
        }
        
        function index(){
            $this->admin = $this->model('home_model');
            $qltk = $this->admin->qltkAll();

            $this->view('admin_layout',[
                'admin_view' => 'admin_qltk',
                'qltk' => $qltk
            ]);
        }
        
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
        
        function edit_user($id_user=''){
 
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
    } 
?>