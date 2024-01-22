<?php 
class LaporanPenjualan {
    private $barangModel;

    public function __construct($barangModel) {
        $this->barangModel = $barangModel;
    }

    public function generateOptimalPackage() {

        $bestSellingItems = $this->barangModel->getBestSellingItems();

        return $bestSellingItems;
    }
}

$barangModel = new BarangModel(); 
$laporanPenjualan = new LaporanPenjualan($barangModel);

$barang1 = new Barang(1, 'Laptop', 10, 500, 1000);
$barang2 = new Barang(2, 'Printer', 5, 200, 400);
$barang3 = new Barang(3, 'Smartphone', 8, 300, 700);

$barangModel->add($barang1);
$barangModel->add($barang2);
$barangModel->add($barang3);

$optimalPackage = $laporanPenjualan->generateOptimalPackage();
echo "Kombinasi Optimal Paket Penjualan: " . implode(', ', $optimalPackage);
?>