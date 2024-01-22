<?php 
class Pengguna {

    private $idBarang;
    private $NamaBarang;
    private $Keterangan;
    private $Satuan;
    private $idPengguna;


    public function __construct($idBarang, $NamaBarang, $Keterangan, $Satuan, $idPengguna) {
        $this->idBarang = $idBarang;
        $this->NamaBarang = $NamaBarang;
        $this->Keterangan = $Keterangan;
        $this->Satuan = $Satuan;
        $this->idPengguna = $idPengguna;

    }

    public function getidBarang() {
        return $this->idBarang;
    }

    public function setidBarang($idBarang) {
        $this->idBarang = $idBarang;
    }

    public function getNamaBarang() {
        return $this->NamaBarang;
    }

    public function setNamaBarang($NamaBarang) {
        $this->NamaBarang = $NamaBarang;
    }

    public function getKeterangan() {
        return $this->Keterangan;
    }

    public function setKeterangan($Keterangan) {
        $this->Keterangan = $Keterangan;
    }

    public function getSatuan() {
        return $this->Satuan;
    }

    public function setSatuan($Satuan) {
        $this->Satuan = $Satuan;
    }

    public function getidPengguna() {
        return $this->idPengguna;
    }

    public function setidPengguna($idPengguna) }

?>