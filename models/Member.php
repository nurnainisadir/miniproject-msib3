<?php
class Member{

    private $koneksi;
    
    public function __construct(){
        global $dbh; 
        $this->koneksi = $dbh;
    }
   
    public function dataMember(){
        $sql = "SELECT * FROM `member` ORDER BY id DESC";
       
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll(); 
        return $rs;   
    }
    public function getMember($id){
        $sql = "SELECT * FROM `member` WHERE id = ?";
       
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch(); 
        return $rs;   
    }
    public function simpan($data){
        $sql = "INSERT INTO `member` (fullname, email, username, password, role, foto) VALUES 
                (?,?,?,SHA1(MD5(SHA1(?))),?,?)";
       
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);  
    }
    public function ubah($data){
        $sql = "UPDATE `member` SET fullname=?, email=?, username=?, 
                password=SHA1(MD5(SHA1(?))), role=?, foto=? WHERE id=?";
       
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);  
    }
    public function hapus($id){
        $sql = "DELETE FROM member WHERE id=?";
       
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);  
    }
    public function cekLogin($data){
        $sql = "SELECT * FROM `member` WHERE username = ? AND password = SHA1(MD5(SHA1(?)))";
      
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch(); 
        return $rs;   
    }
}