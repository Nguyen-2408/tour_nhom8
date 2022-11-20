<?php
    class Thongtindattour extends controller {
        public $bill_tour;
        public $bill_tour_user;
        function index(){
            $this->bill_tour = $this->model('thong_tin_dat_tour_model');
            $show_bill = $this->bill_tour->show_bill_tour($_SESSION['user_id']);
            if($show_bill){
                $this->view('MasterLayout',[
                    'page' => 'user_info/menu_user-info',
                    'page_user-info' => 'tour_da_dat',
                    'show_bill' => $show_bill,
                    'active_tour_da_dat' => ''
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
                    $gianguoilon = $_POST['gianguoilon'];
                    $giatreem = $_POST['giatreem'];
                    $giatien = $_POST['gia_tien'];
                    $bill = $this->bill_tour->bill_tour($tentour, $songay, $username_cont, $dienthoai_cont, $email_cont, $amount_adult, $amount_child, $gianguoilon, $giatreem , $giatien, $id_user);
                
                if(!$bill){
                    echo "Lỗi không đặt được tour";
                }
                
                $show_bill = $this->bill_tour->show_bill_tour($id_user);

                if($show_bill){
                    $this->view('MasterLayout',[
                        'page' => 'user_info/menu_user-info',
                        'page_user-info' => 'tour_da_dat',
                        'show_bill' => $show_bill,
                    ]);
                }
                }
            }
        }

        /* Hiện form sửa đơn cho user*/
        function edit_tour($id_don){
            $id_user = $_SESSION['user_id'];
            $this->bill_tour_user = $this->model('thong_tin_dat_tour_model');
            $this->bill_tour = $this->model('don_dat_tour');
            $edit_don = $this->bill_tour->get_don($id_don);
            $show_bill = $this->bill_tour_user->show_bill_tour($id_user);

            $this->view('MasterLayout',[
                'page' => 'user_info/menu_user-info',
                'page_user-info' => 'tour_da_dat',
                'show_bill' => $show_bill,
                'edit_don' => $edit_don
            ]);
        }

        /* Sửa thông tin đơn đặt tour */
        function ud_don($id_don) {
            $this->bill_tour = $this->model('don_dat_tour');
            if(isset($_POST['update_don'])) {
                $username_cont = $_POST['username_cont'];
                $sdt_cont = $_POST['sdt_cont'];
                $email_cont = $_POST['email_cont'];
                $amount_adult = $_POST['amount_adult'];
                $amount_child = $_POST['amount_child'];
                $giatientour = $_POST['giatientour'];

                $this->bill_tour->ud_don($id_don, $username_cont, $sdt_cont, $email_cont, $amount_adult, $amount_child, $giatientour);
                header('location: '._WEB_ROOT.'/thongtindattour');
            }
        }

        /* Hủy đơn */
        function del_don($id_don) {
            $this->bill_tour = $this->model('don_dat_tour');
            
            $this->bill_tour->del_don($id_don);
            
            header('location: '._WEB_ROOT.'/thongtindattour');
        }
    }
?>