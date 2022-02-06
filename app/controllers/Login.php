<?php 

class Login extends Controller{
    public function index(){
        $data['judul'] = 'Login';
        $this->view('login/index',$data);
    }

    public function register(){
        $data['judul'] = 'Login';
        $this->view('login/register',$data);
    }
}