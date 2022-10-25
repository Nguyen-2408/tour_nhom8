<?php
    class Gioithieu extends controller {
        function index() {
            $this->view('MasterLayout',[
                'page' => 'gioithieu'
            ]);
        }
    }
?>