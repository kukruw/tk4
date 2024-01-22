<?php 

class BarangController {
    private $barangModel;

    public function __construct($barangModel) {
        $this->barangModel = $barangModel;
    }

    public function createBarang($namaBarang, $keterangan, $satuan, $idPengguna) {
        $barang = new Barang(null, $namaBarang, $keterangan, $satuan, $idPengguna);
        $this->barangModel->create($barang);
    }

    public function readAllBarang() {
        return $this->barangModel->getAll();
    }

    public function updateBarang($idBarang, $namaBarang, $keterangan, $satuan, $idPengguna) {
        $barang = new Barang($idBarang, $namaBarang, $keterangan, $satuan, $idPengguna);
        $this->barangModel->update($barang);
    }

    public function deleteBarang($idBarang) {
        $this->barangModel->delete($idBarang);
    }
}
?>