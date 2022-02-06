<?php 

class Batik_model {
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dbhost = 'localhost'; // set the hostname
		$dbname = 'rpl2'; // set the database name
		$dbuser = 'root'; // set the mysql username
        $dbpass = '';  // set the mysql password

        $dsn = "mysql:host=$dbhost;dbname=$dbname";
        try{
            $this->dbh = new PDO($dsn, $dbuser,$dbpass);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllBatik(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM batik');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}