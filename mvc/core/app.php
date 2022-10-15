<?php
class app {
    protected $controller = "Home";
    protected $action = "Getdata";
    protected $params = [];


    //Controller
    function __construct() {
        $arr = $this->Urlprocess();
        if($arr != null) { 
            if(file_exists('./mvc/controllers/'.$arr[0].'.php')){
                $this->controller=$arr[0];
                unset($arr[0]);
            }      
        }

        require_once './mvc/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

    //Action
        if(isset($arr[1])) {
            if(method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
    //Param
        $this->params =$arr?array_values($arr):[];
        call_user_func_array([$this->controller, $this->action], $this->params); // truyền 2 đối số 
    }
    function Urlprocess() {
        if(isset($_GET["url"])){
            return explode("/", filter_var(trim($_GET["url"], "/")));  
        }
    }
}
?>