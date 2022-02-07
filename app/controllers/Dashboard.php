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
        $data['member'] = $this->model('User_model')->getAllUser();
        $this->view('templates/sidebar',$data);
        $this->view('dashboard/member', $data);
        $this->view('templates/footer.sidebar');
    }
    public function batik(){
        $data['judul'] = 'Batik';
        $data['batik'] = $this->model('Batik_model')->getAllBatik();
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
    public function detail($id){
        $data['judul'] = 'Detail Batik';
        $data['batik'] = $this->model('Batik_model')->getBatikById($id);
        $this->view('templates/sidebar',$data);
        $this->view('dashboard/detail_batik',$data);
        $this->view('templates/footer.sidebar');
    }

    public function tambahBatik(){
        if($this->model('Batik_model')->tambahDataBatik($_POST)>0){
            Flasher::setFlash('berhasil','ditambahkan','success');
            header("Location: ". BASEURL . "/dashboard/batik");
            exit;
        }else {
            Flasher::setFlash('gagal','ditambahkan','danger');
            header("Location: ". BASEURL . "/dashboard/batik");
            exit;
        }
    }
}