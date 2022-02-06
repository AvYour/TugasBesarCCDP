<?php 

class User_model{
    private $nama = 'Rifki';
    private $dbh;
    private $stmt;

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser(){
        return $this->nama;
    }
    public function getAllUser(){
        $this->db->query("SELECT * FROM user");
        return $this->db->resultSet();
    }

    public function tambahDataUser($data){
        $hashPasswd = password_hash($data['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO user VALUES ('',:nama,:email,:password,:hakAkses,:tgl_lahir,:jk)";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('password',$hashPasswd);
        $this->db->bind('hakAkses','member');
        $this->db->bind('tgl_lahir',$data['tgl_lahir']);
        $this->db->bind('jk',$data['jk']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}