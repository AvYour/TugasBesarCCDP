<?php 

class User_model{
    private $dbh;
    private $stmt;

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser(){
        $this->db->query("SELECT * FROM user");
        return $this->db->resultSet();
    }

    public function tambahDataUser($data){
        $hashPasswd = password_hash($data['password'], PASSWORD_DEFAULT);
        $query = "SELECT email from user where email=:email";
        $this->db->query($query);
        $this->db->bind('email',$data['email']);
        $this->db->execute();
        if($this->db->single()>0){
            return FALSE;
        }else {
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
    public function loginUser($data){
        $query = "SELECT * FROM user WHERE email=:email";
        $this->db->query($query);
        $this->db->bind('email',$data['email']);

        $this->db->execute();
        $dt = $this->db->single();

        if($this->db->rowCount()>0){
            if (password_verify($data['password'], $dt['password'])) {
                $_SESSION["user_session"] = $dt["id"];
                $_SESSION["nama"] = $dt["nama"];
                $_SESSION["hakAkses"] = $dt["hakAkses"];
                $_SESSION["email"] = $dt["email"];
                $_SESSION["tgl_lahir"] = $dt["tgl_lahir"];
                $_SESSION["jk"] = $dt["jk"];
                $_SESSION["password"] = $data['password'];
                header("Location: ".BASEURL."/dashboard");
            } else return FALSE;
        }
        return $this->db->rowCount();

    }
    public function hapusDataUser($id){
        $query = "DELETE FROM user where id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}