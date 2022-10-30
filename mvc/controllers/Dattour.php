<?php 
    class Dattour extends controller {
        public $tour_info;
        function index() {

            $this->view('MasterLayout', [
                'page' => 'danh_sach_tour'
            ]);
        }

        function get_tour($id) {
            $this->tour_info = $this->model('tourmodel');
            $get_tour_info = $this->tour_info->tour_info($id);
            $this->view('MasterLayout', [
                'page' => 'dat_tour',
                'get_tour_info' => $get_tour_info
            ]);
        }
    }
?>
