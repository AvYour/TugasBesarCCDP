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

    public function regUser(){
        if($this->model('User_model')->tambahDataUser($_POST)>0){
            Flasher::setFlash('berhasil','Registrasi','success');
            header("Location: ". BASEURL . "/login");
            exit;
        }else {
            Flasher::setFlash('GAGAL','Registrasi','danger');
            header("Location: ". BASEURL . "/login/register");
            exit;
        }
    }
}