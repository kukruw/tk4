<?php 
class HakAksesController {
    private $hakAksesModel;

    public function __construct($hakAksesModel) {
        $this->hakAksesModel = $hakAksesModel;
    }

    public function createHakAkses($namaAkses, $keterangan) {
        $hakAkses = new HakAkses(null, $namaAkses, $keterangan);
        $this->hakAksesModel->create($hakAkses);
    }

    public function readAllHakAkses() {
        return $this->hakAksesModel->getAll();
    }

    public function updateHakAkses($idAkses, $namaAkses, $keterangan) {
        $hakAkses = new HakAkses($idAkses, $namaAkses, $keterangan);
        $this->hakAksesModel->update($hakAkses);
    }

    public function deleteHakAkses($idAkses) {
        $this->hakAksesModel->delete($idAkses);
    }
}
?>