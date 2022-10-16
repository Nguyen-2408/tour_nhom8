<?php

    class Home extends controller {
        public $user; 
        function index() {
            $this->view('MasterLayout',[
                'page' => 'trang_chu'
            ]);
            
        }

        function login() {
            $this->view('MasterLayout',[
                'showLogin' => '',
                'page' => 'trang_chu'
            ]); 
        }
        function signup() {
            $this->view('MasterLayout',[
                'showSignup' => '',
                'page' => 'trang_chu'   
            ]);
                
        }

        function login_excute() {
            $this->user = $this->model('login_model');

            if(isset($_POST['btnLogin'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                $result = $this->user->check_user($username,$password);
                    if(mysqli_num_rows($result)>0){
                        $row = mysqli_fetch_assoc($result);
                        $avatar = $row['avatar'];
                        $user_id = $row['id'];
                        $this->view('MasterLayout',[
                            'page' => 'trang_chu',
                            'success' => '',
                            'msg' => 'login_success',
                            'username' => $username,
                            'avatar' => $avatar
                        ]);
                        
                        echo $user_id;
                    } else {
                        $this->view('MasterLayout',[
                            'page' => 'trang_chu',
                            'showLogin' => '',
                            'msg' => 'login_fail',
                            'username' => $username,
                            'password' => $password
                        ]);
                    }
                
            }
        }

        function signup_excute() {
            $this->user = $this->model('signup_model');

            if(isset($_POST['btnSignup'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                $avatar = "";

                $check = $this->user->check_user($username, $email);
                
                if($check){
                    if(mysqli_num_rows($check) > 0) {
                        $row = mysqli_fetch_assoc($check);
                        if($username == $row['username']){
                            $this->view('MasterLayout',[
                                'page' => 'trang_chu',
                                'showSignup' => '',
                                'msg' => 'username_already_exist',
                                'username' => $username,
                                'email' => $email,
                                'password' => $password,
                                'cpassword' => $cpassword,
                                'avatar' =>''
                            ]);
                        }
                        if($email == $row['email']){
                            $this->view('MasterLayout',[
                                'page' => 'trang_chu',
                                'showSignup' => '',
                                'msg' => 'email_already_exist',
                                'username' => $username,
                                'email' => $email,
                                'password' => $password,
                                'cpassword' => $cpassword,
                                'avatar' =>''
                            ]);
                        }     
                    } else {
                        if($password != $cpassword){
                            $this->view('MasterLayout',[
                                'page' => 'trang_chu',
                                'showSignup' => '',
                                'msg' => 'pass_not_match',
                                'username' => $username,
                                'email' => $email,
                                'password' => $password,
                                'cpassword' => $cpassword
                            ]);
                        }else {
                            $result = $this->user->add_user($username,$email,$password,$avatar);
                            if($result) {
                                $this->view('MasterLayout',[
                                    'page' => 'trang_chu',
                                    'showLogin' => '',
                                    'msg' => 'signup_success',
                                    'username' => $username,
                                    'avatar' =>''
                                ]);
                            
                            }else {
                                $this->view('MasterLayout',[
                                    'page' => 'trang_chu',
                                    'showSignup' => '',
                                    'msg' => 'signup_fail',
                                    'username' => $username,
                                    'email' => $email,
                                    'password' => $password,
                                    'cpassword' => $cpassword
                                ]);
                            }
                        }                        
                    }
                }
            }

           /*  header('location: '.(_WEB_ROOT).'/'); */
        }

        function logout() {
            unset($user_id); 
            header('location:'.(_WEB_ROOT).'/');
        }
    }
     
    
?>