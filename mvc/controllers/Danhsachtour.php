<?php
    class Danhsachtour extends controller {
        public $diadiem;
        public $tour;
        function __construct(){
            $this->diadiem = $this->model('diadiemmodel');
            $this->tour = $this->model('tourmodel');
        }
        function index(){
            $dd_trongnuoc = $this->diadiem->get_dia_diem_trong_nuoc();
            $dd_nuocngoai = $this->diadiem->get_dia_diem_nuoc_ngoai();
            $tour_first = $this->tour->get_all_tour(1);
            $this->view('MasterLayout', [
                'page' => 'danh_sach_tour',
                'dd_trongnuoc' => $dd_trongnuoc,
                'dd_nuocngoai' => $dd_nuocngoai,
                'tour_first'=>$tour_first

            ]);
        }

        function get_tour($id_diadiem = 1) {
                $dd_trongnuoc = $this->diadiem->get_dia_diem_trong_nuoc();
                $dd_nuocngoai = $this->diadiem->get_dia_diem_nuoc_ngoai();
                $alldiadiem = $this->diadiem->get_all_dia_diem();
                if($alldiadiem) {
                    while($row = mysqli_fetch_assoc($alldiadiem)){
                    $dstour = $this->tour->get_all_tour($id_diadiem);
                    $this->view('MasterLayout', [
                        'page' => 'danh_sach_tour',
                        'dd_trongnuoc' => $dd_trongnuoc,
                        'dd_nuocngoai' => $dd_nuocngoai,
                        'alldiadiem' => $alldiadiem,
                        'dstour' => $dstour
                        
                        ]);
                    }
                }
            }
        
        function tim_kiem_tour(){
            $dd_trongnuoc = $this->diadiem->get_dia_diem_trong_nuoc();
            $dd_nuocngoai = $this->diadiem->get_dia_diem_nuoc_ngoai();
            if(isset($_POST['btn_tim_kiem_tour'])){
                if(!empty($_POST['txt_search_tour'])){  
                    $tentour = $_POST['txt_search_tour'];         
                    $dstour = $this->tour->tim_kiem_tour($tentour);
                    if(mysqli_num_rows($dstour) == 0) {
                        $this->view('MasterLayout', [
                            'page' => 'danh_sach_tour',
                            'dd_trongnuoc' => $dd_trongnuoc,
                            'dd_nuocngoai' => $dd_nuocngoai,
                            'tentour' => $tentour
                        ]); 
                    }else {

                        $this->view('MasterLayout', [
                            'page' => 'danh_sach_tour',
                            'dd_trongnuoc' => $dd_trongnuoc,
                            'dd_nuocngoai' => $dd_nuocngoai,
                            'dstour' => $dstour,
                            'tentour' => $tentour
                        ]);
                    }
                    
        
                }
            }else {
                $this->loadError();
            }
        }

        
        function loadError($name = '404') {
            require_once './mvc/errors/'.$name.'.php';
        }
    }
                

            
        
    
?>