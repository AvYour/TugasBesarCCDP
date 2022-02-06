<?php 
class Dashboard extends Controller{
    public function index($name = 'Default'){
        $data['nama'] = $name;
        $data['judul'] = 'Dashboard';
        $this->view('templates/sidebar',$data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer.sidebar');
    }
    public function member(){
        $data['judul'] = 'Member';
        $this->view('templates/sidebar',$data);
        $this->view('dashboard/member', $data);
        $this->view('templates/footer.sidebar');
    }
    public function batik(){
        $data['judul'] = 'Batik';
        $this->view('templates/sidebar',$data);
        $this->view('dashboard/batik', $data);
        $this->view('templates/footer.sidebar');
    }
    public function profil(){
        $data['judul'] = 'Profil';
        $this->view('templates/sidebar',$data);
        $this->view('dashboard/profil', $data);
        $this->view('templates/footer.sidebar');
    }
}