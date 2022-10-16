<?php
    class Home extends controller {

        function index() {
            $this->view('MasterLayout', [
                'page' => 'trang_chu'
            ]);

        }

        function logout() {
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['avatar']);
            unset( $_SESSION['msg']);
            header('location: '._WEB_ROOT.'/');
        }
    }
?>