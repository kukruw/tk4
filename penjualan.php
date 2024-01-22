<?php
class Penjualan {

private $idPenjualan;
private $JumlahPenjualan;
private $HargaJual;
private $IdPengguna;

public function __construct($idPenjualan, $JumlahPenjualan, $HargaJual, $IdPengguna) {
    $this->idPenjualan = $idPenjualan;
    $this->JumlahPenjualan = $JumlahPenjualan;
    $this->HargaJual = $HargaJual;
    $this->IdPengguna = $IdPengguna;

}

public function getidPenjualan() {
    return $this->idPenjualan;
}

public function setidPenjualan($idPenjualan) {
    $this->idPenjualan = $idPenjualan;
}

public function getJumlahPenjualan() {
    return $this->JumlahPenjualan;
}

public function setJumlahPenjualan($JumlahPenjualan) {
    $this->JumlahPenjualan = $JumlahPenjualan;
}

public function getHargaJual() {
    return $this->HargaJual;
}

public function setHargaJual($HargaJual) {
    $this->HargaJual = $HargaJual;
}

public function getIdPengguna() {
    return $this->IdPengguna;
}

public function setIdPengguna($IdPengguna) {
    $this->IdPengguna = $IdPengguna;
}
Class HakAkses
class Penjualan {

private $IdAkses;
private $NamaAkses;
private $Keterangan;

public function __construct($IdAkses, $NamaAkses, $Keterangan) {
    $this->IdAkses = $IdAkses;
    $this->NamaAkses = $NamaAkses;
    $this->Keterangan = $Keterangan;

}

public function getIdAkses() {
    return $this->IdAkses;
}

public function setIdAkses($IdAkses) {
    $this->IdAkses = IdAkses;
}

public function getNamaAkses() {
    return $this->NamaAkses;
}

public function setNamaAkses($NamaAkses) {
    $this->NamaAkses = $NamaAkses;
}

public function getKeterangan() {
    return $this->Keterangan;
}

public function setKeterangan($Keterangan {
    $this->HargaJual = $HargaJual;
}

public function getKeterangan() {
    return $this->Keterangan;
}
?>