<?php
class Batik extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $data['batik'] = $this->model('Batik_model')->getAllBatik();
        $this->view('templates/sidebar',$data);
        $this->view('dashboard/batik',$data);
        $this->view('templates/footer.sidebar');
    }
    public function detail($id){
        $data['judul'] = 'Detail Batik';
        $data['batik'] = $this->model('Batik_model')->getBatikById($id);
        $this->view('templates/sidebar',$data);
        $this->view('dashboard/detail_batik',$data);
        $this->view('templates/footer.sidebar');
    }

    public function tambah(){
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