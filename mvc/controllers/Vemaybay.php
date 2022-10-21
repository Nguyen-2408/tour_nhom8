<?php
    class Vemaybay extends controller {
        function dat_ve_mb() {
            if(!isset($_SESSION['user_id'])){
                $_SESSION['msg_vemaybay'] = 'Bạn phải đăng nhập để đặt vé máy bay';
                $_SESSION['type_msg'] = 'error';
                
                $this->view('MasterLayout',[
                    'page' => 'trang_chu',
                    'showLogin' => ''
                ]);  
            }else {
                
                $this->view('MasterLayout',[
                    'page' => 'dat_ve_may_bay'
                ]);
            }
                      
        }
    }
?>