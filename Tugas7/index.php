<?php
require 'Hewan.php';
require 'Kucing.php';
require 'Anjing.php';

$kucing = new Kucing();
$kucing->setNama("Nyanko");
$kucing->setUmur(2);

$anjing = new Anjing();
$anjing->setNama("Wanchan");
$anjing->setUmur(4);

echo "Data Hewan<br><br>";

echo "Nama: " . $kucing->getNama() . "<br>";
echo "Umur: " . $kucing->getUmur() . " tahun <br>";
echo "Jenis: " . $kucing->getJenis() . "<br>";
echo "Suara: " . $kucing->getSuara() . "<br><br>";

echo "Nama: " . $anjing->getNama() . "<br>";
echo "Umur: " . $anjing->getUmur() . " tahun <br>";
echo "Jenis: " . $anjing->getJenis() . "<br>";
echo "Suara: " . $anjing->getSuara() . "<br>";

?>