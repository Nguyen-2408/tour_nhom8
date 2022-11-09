<?php
    class Thongtindattour extends controller {
        public $bill_tour;
        function index(){
            $this->bill_tour = $this->model('thong_tin_dat_tour_model');
            $show_bill = $this->bill_tour->show_bill_tour($_SESSION['user_id']);
            if($show_bill){
                $this->view('MasterLayout',[
                    'page' => 'user_info/tour_da_dat',
                    'show_bill' => $show_bill
                ]);
            }
        }

        function show_bill($id_user){
            if(isset($_POST['btn_booktour'])){
                if(!isset($_SESSION['user_id'])){
                    $this->view('MasterLayout', [
                        'page' => 'trang_chu',
                        'show_login' => ''
                    ]);
                }
                else{
                $id_user = $_SESSION['user_id'];
                $this->bill_tour = $this->model('thong_tin_dat_tour_model');
                $username_cont = $_POST['username_cont'];
                $dienthoai_cont = $_POST['dienthoai_cont'];
                $email_cont = $_POST['email_cont'];
                $amount_adult = $_POST['amount_adult'];
                $amount_child = $_POST['amount_child'];
                $tentour = $_POST['tentour'];
                $songay = $_POST['songay'];
                $bill = $this->bill_tour->bill_tour($tentour, $songay, $username_cont, $dienthoai_cont, $email_cont, $amount_adult, $amount_child, $id_user);
                
                if($bill){
                    /*  $this->view('MasterLayout',[
                        'page' => 'thong_tin_dat_tour',
                        ''
                    ]); */
                }else {
                    echo "Lỗi không đặt được tour";
                }
                $show_bill = $this->bill_tour->show_bill_tour($id_user);

                if($show_bill){
                    $this->view('MasterLayout',[
                        'page' => 'user_info/tour_da_dat',
                        'show_bill' => $show_bill
                    ]);
                }
                }
            }
        }
    }
?>