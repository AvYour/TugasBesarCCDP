<?php 

class Register extends Controller{
    public function index(){
        $data['judul'] = 'Login';
        $this->view('register/index',$data);
    }
}