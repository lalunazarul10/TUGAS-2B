<?php
require_once __DIR__ . "/Pegawai.php";          // WAJIB paling atas
require_once __DIR__ . "/PegawaiTetap.php";
require_once __DIR__ . "/PegawaiKontrak.php";

$joko = new PegawaiTetap("Joko", 5000000, 1000000);
$budi = new PegawaiKontrak("Budi", 100, 50000);

echo "Nama: " . $joko->getNama() . "<br>";
echo "Gaji: Rp" . number_format($joko->hitungGaji(), 0, ',', '.') . "<br><br>";

echo "Nama: " . $budi->getNama() . "<br>";
echo "Gaji: Rp" . number_format($budi->hitungGaji(), 0, ',', '.');