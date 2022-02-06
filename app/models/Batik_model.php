<?php 

class Batik_model {
    private $dbh;
    private $stmt;

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBatik(){
        $this->db->query("SELECT * FROM batik");
        return $this->db->resultSet();
    }
    public function getBatikById($id)
    {
        $this->db->query("SELECT * FROM batik WHERE id=:id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahDataBatik($data){
        $query = "INSERT INTO batik VALUES ('',:nama,:provinsi,:kota,:deskripsi)";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('provinsi',$data['provinsi']);
        $this->db->bind('kota',$data['kota']);
        $this->db->bind('deskripsi',$data['deskripsi']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}