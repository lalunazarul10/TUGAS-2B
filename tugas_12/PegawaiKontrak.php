<?php
require_once __DIR__ . "/Pegawai.php";

class PegawaiKontrak extends Pegawai {
    private $jamKerja;
    private $tarifPerJam;

    public function __construct($nama, $jamKerja, $tarifPerJam) {
        parent::__construct($nama, 0);
        $this->jamKerja = $jamKerja;
        $this->tarifPerJam = $tarifPerJam;
    }

    public function hitungGaji() {
        return $this->jamKerja * $this->tarifPerJam;
    }
}