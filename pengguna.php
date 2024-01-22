<?php 
class Pengguna {

    private $idPengguna;
    private $NamaPengguna;
    private $NamaDepan;
    private $NamaBelakang;
    private $NoHp;
    private $Alamat;
    private $Password;
    private $idAkses;

    public function __construct($idPengguna, $namaPengguna, $NamaDepan, $NamaBelakang, $NoHp, $Alamat, $Password, $idAkses) {
        $this->idPengguna = $idPengguna;
        $this->namaPengguna = $namaPengguna;
        $this->NamaDepan = $NamaDepan;
        $this->NamaBelakang = $NamaBelakang;
        $this->NoHp = $NoHp;
        $this->Alamat = $Alamat;
        $this->password = $password;
        $this->idAkses = $idAkses;
    }

    public function getIdPengguna() {
        return $this->idPengguna;
    }

    public function setIdPengguna($idPengguna) {
        $this->idPengguna = $idPengguna;
    }

    public function getNamaPengguna() {
        return $this->namaPengguna;
    }

    public function setNamaPengguna($namaPengguna) {
        $this->namaPengguna = $namaPengguna;
    }

    public function getNamaDepan() {
        return $this->NamaDepan;
    }

    public function setNamaDepan($NamaDepan) {
        $this->NamaDepan = $NamaDepan;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) 
}
?>