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

    } 
?>