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
}