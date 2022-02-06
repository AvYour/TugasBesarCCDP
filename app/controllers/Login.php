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
            Flasher::setFlash('berhasil. Silakan Login','Registrasi','success');
            header("Location: ". BASEURL . "/login");
            exit;
        }else {
            Flasher::setFlash('GAGAL','Registrasi','danger');
            header("Location: ". BASEURL . "/login/register");
            exit;
        }
    }

    public function loginUser(){
        if($this->model('User_model')->loginUser($_POST)==0){
            Flasher::setFlash('SALAH. Silakan Login Kembali','Email/Password','danger');
            header("Location: ". BASEURL . "/login");
            exit;
        }else if(FALSE){
            Flasher::setFlash('SALAH. Silakan Login Kembali','Email/Password','danger');
            header("Location: ". BASEURL . "/login");
            exit;
        }
    }
}