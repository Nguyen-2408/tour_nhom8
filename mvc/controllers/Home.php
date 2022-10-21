<?php
    class Home extends controller {
        public $diadiem;
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
        

        function logout() {
            session_destroy();
            header('location: '._WEB_ROOT.'/');
        }
    }
?>