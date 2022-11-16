<?php
class Kategori{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor untuk koneksi database
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php 
        $this->koneksi = $dbh;
    }
    //member3 method2 CRUD
    public function dataKategori(){
        $sql = "SELECT * FROM jenis";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll(); 
        return $rs;   
    }

    public function simpan($data){
        $sql = "INSERT INTO jenis (nama) VALUES (?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);  
    }

    public function hapus($id){
        $sql = "DELETE FROM jenis WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);  
    }

}