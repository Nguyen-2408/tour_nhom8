<?php
    class Vemaybay extends controller {
        function dat_ve_mb() {
            if(!isset($_SESSION['user_id'])){
                $_SESSION['msg'] = 'Bạn phải đăng nhập để đặt vé máy bay';
                
                $this->view('MasterLayout',[
                    'page' => 'dat_ve_may_bay',
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