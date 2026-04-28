<?php
require_once __DIR__ . "/Pegawai.php";

class PegawaiTetap extends Pegawai {
    private $tunjangan;

    public function __construct($nama, $gajiDasar, $tunjangan) {
        parent::__construct($nama, $gajiDasar);
        $this->tunjangan = $tunjangan;
    }

    public function hitungGaji() {
        return $this->getGajiDasar() + $this->tunjangan;
    }
}