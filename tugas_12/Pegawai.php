<?php
abstract class Pegawai {
    private $nama;
    private $gajiDasar;

    public function __construct($nama, $gajiDasar) {
        $this->nama = $nama;
        $this->gajiDasar = $gajiDasar;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getGajiDasar() {
        return $this->gajiDasar;
    }

    abstract public function hitungGaji();
}