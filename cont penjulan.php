<?php
class PenjualanController {
    private $penjualanModel;

    public function __construct($penjualanModel) {
        $this->penjualanModel = $penjualanModel;
    }

    public function createPenjualan($jumlahPenjualan, $hargaJual, $idPengguna) {
        $penjualan = new Penjualan(null, $jumlahPenjualan, $hargaJual, $idPengguna);
        $this->penjualanModel->create($penjualan);
    }

    public function readAllPenjualan() {
        return $this->penjualanModel->getAll();
    }

    public function updatePenjualan($idPenjualan, $jumlahPenjualan, $hargaJual, $idPengguna) {
        $penjualan = new Penjualan($idPenjualan, $jumlahPenjualan, $hargaJual, $idPengguna);
        $this->penjualanModel->update($penjualan);
    }

    public function deletePenjualan($idPenjualan) {
        $this->penjualanModel->delete($idPenjualan);
    }
}
?>
