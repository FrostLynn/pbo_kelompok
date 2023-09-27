<?php

require ('classes.php');

$sapi = new Sapi ("Sumbul", 5, 500);
$kambing = new Kambing ("Budi", 3, 80);
$ayam = new Ayam ("Jeki", 1, 7);
$bebek = new Bebek ("Ayu", 2, 12);
$babi = new Babi ("Lolita", 3, 100);

echo "Informasi Hewan Ternak: <br>";
echo "---------------------------- <br>";
echo "Sapi: <br>";
echo "Nama: {$sapi->nama} <br>";
echo "Umur: {$sapi->getUmur()} tahun <br>";
echo "Berat Badan: {$sapi->getBeratBadan()} kg <br>";
$sapi->bersuara();
echo "---------------------------- <br>";
echo "Kambing: <br>";
echo "Nama: {$kambing->nama} <br>";
echo "Umur: {$kambing->getUmur()} tahun <br>";
echo "Berat Badan: {$kambing->getBeratBadan()} kg <br>";
$kambing->bersuara();
echo "---------------------------- <br>";
echo "Ayam: <br>";
echo "Nama: {$ayam->nama} <br>";
echo "Umur: {$ayam->getUmur()} tahun <br>";
echo "Berat Badan: {$ayam->getBeratBadan()} kg <br>";
$ayam->bersuara();
echo "---------------------------- <br>";
echo "Bebek: <br>";
echo "Nama: {$bebek->nama} <br>";
echo "Umur: {$bebek->getUmur()} tahun <br>";
echo "Berat Badan: {$bebek->getBeratBadan()} kg <br>";
$bebek->bersuara();
echo "---------------------------- <br>";
echo "Babi: <br>";
echo "Nama: {$babi->nama} <br>";
echo "Umur: {$babi->getUmur()} tahun <br>";
echo "Berat Badan: {$babi->getBeratBadan()} kg <br>";
$babi->bersuara();


?>