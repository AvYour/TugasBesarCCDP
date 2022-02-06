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
}