<?php
class Film{
    //member1 var
    public $koneksi;
    //member2 konstruktor
    public function __construct(){
        global $dbh; //panggil instance obj PDO di koneksi_db.php
        $this->koneksi = $dbh; // instance obj PDO di assign ke var koneksi   
    }
    //member3 method2 terkait CRUD
    public function getAlls(){
        $sql = "SELECT * FROM film";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getAll(){
        $sql = "SELECT s.id AS studio, f.*
            FROM film f
            INNER JOIN studio s ON s.id = f.idstudio";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getFilm($id){
        $sql = "SELECT s.id AS studio, f.*, g.nama AS genre
        FROM film f
        INNER JOIN studio s ON s.id = f.idstudio
        INNER JOIN genre g ON g.id = f.idgenre
            WHERE f.id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function getFilms($id){
        $sql = "SELECT w.tayang_perdana AS tayang, 
        w.durasi AS durasi, f.*
        FROM film f
        INNER JOIN waktu_tayang w ON w.idfilm = f.id
            WHERE f.id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function totalFilm(){
        $sql = "SELECT count(*) AS jumlah FROM film";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetch();
        return $rs;
    }
    public function hapus($data){
        $sql = "DELETE FROM film WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function getFilmGenre1(){
        $sql = "SELECT s.id AS studio, f.*, s.nama AS genre
        FROM film f
        INNER JOIN studio s ON s.id = f.idstudio
            WHERE f.idgenre = 1";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getFilmGenre2(){
        $sql = "SELECT s.id AS studio, f.*, s.nama AS genre
        FROM film f
        INNER JOIN studio s ON s.id = f.idstudio
            WHERE f.idgenre = 2";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getFilmGenre3(){
        $sql = "SELECT s.id AS studio, f.*, s.nama AS genre
        FROM film f
        INNER JOIN studio s ON s.id = f.idstudio
            WHERE f.idgenre = 3";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getFilmGenre4(){
        $sql = "SELECT s.id AS studio, f.*, s.nama AS genre
        FROM film f
        INNER JOIN studio s ON s.id = f.idstudio
            WHERE f.idgenre = 4";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getFilmGenre5(){
        $sql = "SELECT s.id AS studio, f.*, s.nama AS genre
        FROM film f
        INNER JOIN studio s ON s.id = f.idstudio
            WHERE f.idgenre = 5";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getFilmGenre6(){
        $sql = "SELECT s.id AS studio, f.*, s.nama AS genre
        FROM film f
        INNER JOIN studio s ON s.id = f.idstudio
            WHERE f.idgenre = 6";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getFilmGenre7(){
        $sql = "SELECT s.id AS studio, f.*, s.nama AS genre
        FROM film f
        INNER JOIN studio s ON s.id = f.idstudio
            WHERE f.idgenre = 7";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getFilm14(){
        $sql = "SELECT * FROM film WHERE id=14";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetch();
        return $rs;
    }
    public function getFilm4(){
        $sql = "SELECT * FROM film WHERE id=4";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetch();
        return $rs;
    }
    public function getFilm1(){
        $sql = "SELECT * FROM film WHERE id=1";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetch();
        return $rs;
    }
}