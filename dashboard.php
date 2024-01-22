<?php 
class DashboardLaporan {
    private $barangModel;
    private $penjualanModel;

    public function __construct($barangModel, $penjualanModel) {
        $this->barangModel = $barangModel;
        $this->penjualanModel = $penjualanModel;
    }

    public function generateProfitLossReport() {
  
        $allBarang = $this->barangModel->getAll();
        $allPenjualan = $this->penjualanModel->getAll();

        $profitLossReport = array();

        $totalPendapatan = 0;
        foreach ($allPenjualan as $penjualan) {
            $totalPendapatan += $penjualan->getJumlahPenjualan() * $penjualan->getHargaJual();
        }

        $totalBiaya = 0;
        foreach ($allBarang as $barang) {
            $totalBiaya += $barang->getHargaBeli();
        }

        $rugiLaba = $totalPendapatan - $totalBiaya;

        $profitLossReport['Total Pendapatan'] = $totalPendapatan;
        $profitLossReport['Total Biaya'] = $totalBiaya;
        $profitLossReport['Rugi Laba'] = $rugiLaba;

        return $profitLossReport;
    }
}

$barangModel = new BarangModel(); 
$penjualanModel = new PenjualanModel(); 

$barang1 = new Barang(1, 'Laptop', 10, 500, 1000);
$barang2 = new Barang(2, 'Printer', 5, 200, 400);
$barang3 = new Barang(3, 'Smartphone', 8, 300, 700);

$barangModel->add($barang1);
$barangModel->add($barang2);
$barangModel->add($barang3);

$penjualan1 = new Penjualan(1, 5, 800, 1);
$penjualan2 = new Penjualan(2, 3, 300, 2);

$penjualanModel->add($penjualan1);
$penjualanModel->add($penjualan2);

$dashboardLaporan = new DashboardLaporan($barangModel, $penjualanModel);
$profitLossReport = $dashboardLaporan->generateProfitLossReport();

echo "Laporan Rugi Laba:\n";
foreach ($profitLossReport as $key => $value) {
    echo "$key: $value\n";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>selamat datang di dashboard</h1>
</body>
</html>

