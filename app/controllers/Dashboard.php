<?php
class Dashboard extends Controller
{
    public function index($name = 'Default')
    {
        $data['nama'] = $name;
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->model('User_model')->getSingleUser($_SESSION['user_session']);
        $data['batik'] = $this->model('Batik_model')->getAllBatik();
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer.sidebar');
    }
    public function member()
    {
        $data['judul'] = 'Member';
        $data['user'] = $this->model('User_model')->getSingleUser($_SESSION['user_session']);
        $data['member'] = $this->model('User_model')->getAllUser();
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/member', $data);
        $this->view('templates/footer.sidebar');
    }
    public function batik()
    {
        $data['judul'] = 'Batik';
        $data['user'] = $this->model('User_model')->getSingleUser($_SESSION['user_session']);
        $data['batik'] = $this->model('Batik_model')->getAllBatik();
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/batik', $data);
        $this->view('templates/footer.sidebar');
    }
    public function profil()
    {
        $data['judul'] = 'Profil';
        $data['user'] = $this->model('User_model')->getSingleUser($_SESSION['user_session']);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/profil', $data);
        $this->view('templates/footer.sidebar');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Batik';
        $data['batik'] = $this->model('Batik_model')->getBatikById($id);
        $this->view('templates/sidebar', $data);
        $this->view('dashboard/detail', $data);
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
    public function logout()
    {
        $this->view('dashboard/logout');
    }
    public function ubahProfil(){
        if ($this->model('User_model')->ubahDataUser($_POST) > 0) {
            Flasher::setFlash('Data berhasil', 'diubah', 'success');
            header("Location: " . BASEURL . "/dashboard/profil");
            exit;
        } else {
            Flasher::setFlash('Data gagal', 'diubah', 'danger');
            header("Location: " . BASEURL . "/dashboard/profil");
            exit;
        }
    }
}