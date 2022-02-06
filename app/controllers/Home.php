<?php
class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['batik'] = $this->model('Batik_model')->getAllBatik();
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}