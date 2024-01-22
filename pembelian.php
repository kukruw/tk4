<?
class Pembelian {

    private $idPembelian;
    private $jumlahPembelian;
    private $hargaBeli;
    private $idPengguna;

    public function __construct($idPembelian, $jumlahPembelian, $hargaBeli, $idPengguna) {
        $this->idPembelian = $idPembelian;
        $this->jumlahPembelian = $jumlahPembelian;
        $this->hargaBeli = $hargaBeli;
        $this->idPengguna = $idPengguna;
    }

    public function getIdPembelian() {
        return $this->idPembelian;
    }

    public function setIdPembelian($idPembelian) {
        $this->idPembelian = $idPembelian;
    }

    public function getJumlahPembelian() {
        return $this->jumlahPembelian;
    }

    public function setJumlahPembelian($jumlahPembelian) {
        $this->jumlahPembelian = $jumlahPembelian;
    }

    public function getHargaBeli() {
        return $this->hargaBeli;
    }

    public function setHargaBeli($hargaBeli) {
        $this->hargaBeli = $hargaBeli;
    }

    public function getIdPengguna() {
        return $this->idPengguna;
    }

    public function setIdPengguna($idPengguna) {
        $this->idPengguna = $idPengguna;
    }

    public function getTotalHarga() {
        return $this->jumlahPembelian * $this->hargaBeli;
    }

}

?>