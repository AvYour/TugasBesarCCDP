<?php
class Dashboard extends Controller
{
    public function index($name = 'Default')
    {
        $data['nama'] = $name;
        $data['judul'] = 'Dashboard';
        $data['batik'] = $this->model('Batik_model')->getAllBatik();
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer.sidebar');
    }
    public function member()
    {
        $data['judul'] = 'Member';
        $data['member'] = $this->model('User_model')->getAllUser();
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/member', $data);
        $this->view('templates/footer.sidebar');
    }
    public function batik()
    {
        $data['judul'] = 'Batik';
        $data['batik'] = $this->model('Batik_model')->getAllBatik();
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/batik', $data);
        $this->view('templates/footer.sidebar');
    }
    public function profil()
    {
        $data['judul'] = 'Profil';
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/profil', $data);
        $this->view('templates/footer.sidebar');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Batik';
        $data['batik'] = $this->model('Batik_model')->getBatikById($id);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/detail_batik', $data);
        $this->view('templates/footer.sidebar');
    }

    public function tambahBatik()
    {
        if ($this->model('Batik_model')->tambahDataBatik($_POST) > 0) {
            Flasher::setFlash('Data Batik berhasil', 'ditambahkan', 'success');
            header("Location: " . BASEURL . "/dashboard/batik");
            exit;
        } else {
            Flasher::setFlash('Data Batik gagal', 'ditambahkan', 'danger');
            header("Location: " . BASEURL . "/dashboard/batik");
            exit;
        }
    }
    public function hapusUser($id)
    {
        if ($this->model('User_model')->hapusDataUser($id) > 0) {
            Flasher::setFlash('Data user berhasil', 'dihapus', 'success');
            header("Location: " . BASEURL . "/dashboard/member");
            exit;
        } else {
            Flasher::setFlash('Data user gagal', 'dihapus', 'danger');
            header("Location: " . BASEURL . "/dashboard/member");
            exit;
        }
    }
}
