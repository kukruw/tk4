<?
class PembelianController {
    private $pembelianModel;

    public function __construct($pembelianModel) {
        $this->pembelianModel = $pembelianModel;
    }

    public function createPembelian($jumlahPembelian, $hargaBeli, $idPengguna) {
        $pembelian = new Pembelian(null, $jumlahPembelian, $hargaBeli, $idPengguna);
        $this->pembelianModel->create($pembelian);
    }

    public function readAllPembelian() {
        return $this->pembelianModel->getAll();
    }

    public function updatePembelian($idPembelian, $jumlahPembelian, $hargaBeli, $idPengguna) {
        $pembelian = new Pembelian($idPembelian, $jumlahPembelian, $hargaBeli, $idPengguna);
        $this->pembelianModel->update($pembelian);
    }

    public function deletePembelian($idPembelian) {
        $this->pembelianModel->delete($idPembelian);
    }
}
b. controller pengguna

class PenggunaController {
    private $penggunaModel;

    public function __construct($penggunaModel) {
        $this->penggunaModel = $penggunaModel;
    }

    public function createPengguna($namaPengguna, $namaDepan, $namaBelakang, $noHp, $alamat, $password, $idAkses) {
        $pengguna = new Pengguna(null, $namaPengguna, $namaDepan, $namaBelakang, $noHp, $alamat, $password, $idAkses);
        $this->penggunaModel->create($pengguna);
    }

    public function readAllPengguna() {
        return $this->penggunaModel->getAll();
    }

    public function updatePengguna($idPengguna, $namaPengguna, $namaDepan, $namaBelakang, $noHp, $alamat, $password, $idAkses) {
        $pengguna = new Pengguna($idPengguna, $namaPengguna, $namaDepan, $namaBelakang, $noHp, $alamat, $password, $idAkses);
        $this->penggunaModel->update($pengguna);
    }

    public function deletePengguna($idPengguna) {
        $this->penggunaModel->delete($idPengguna);
    }
}

c. controller barang

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
d. controller penjualan

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