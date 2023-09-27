<?php

// Kelas dasar HewanTernak
class HewanTernak {
    public $nama;
    public $umur;
    public $beratBadan;

    public function __construct($nama, $umur, $beratBadan) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->beratBadan = $beratBadan;
    }

    public function makan() {
        echo "{$this->nama} sedang makan.\n";
    }

    public function bersuara() {
        echo "{$this->nama} sedang bersuara.\n";
    }
}

// Subkelas Sapi
class Sapi extends HewanTernak {
    public $jumlahSusuPerHari;

    public function __construct($nama, $umur, $beratBadan, $jumlahSusuPerHari) {
        parent::__construct($nama, $umur, $beratBadan);
        $this->jumlahSusuPerHari = $jumlahSusuPerHari;
    }

    public function bersuara() {
        echo "{$this->nama} mengeluarkan suara: Moo!\n";
    }
}

// Subkelas Kambing
class Kambing extends HewanTernak {
    public $jumlahWolPerHari;

    public function __construct($nama, $umur, $beratBadan, $jumlahWolPerHari) {
        parent::__construct($nama, $umur, $beratBadan);
        $this->jumlahWolPerHari = $jumlahWolPerHari;
    }

    public function bersuara() {
        echo "{$this->nama} mengeluarkan suara: Meh!\n";
    }
}

// Subkelas Ayam
class Ayam extends HewanTernak {
    public $jumlahTelurPerHari;

    public function __construct($nama, $umur, $beratBadan, $jumlahTelurPerHari) {
        parent::__construct($nama, $umur, $beratBadan);
        $this->jumlahTelurPerHari = $jumlahTelurPerHari;
    }

    public function bersuara() {
        echo "{$this->nama} mengeluarkan suara: Cluck!\n";
    }
}

// Membuat objek hewan ternak
$sapi = new Sapi("Sapi Lina", 5, 500, 10);
$kambing = new Kambing("Kambing Budi", 3, 150, 5);
$ayam = new Ayam("Ayam Susi", 1, 5, 2);

// Menampilkan informasi dan tindakan hewan ternak
echo "Informasi Hewan Ternak:<br>";
echo "------------------------<br>";
echo "Sapi:<br>";
echo "Nama: {$sapi->nama}<br>";
echo "Umur: {$sapi->umur} tahun<br>";
echo "Berat Badan: {$sapi->beratBadan} kg<br>";
echo "Jumlah Susu per Hari: {$sapi->jumlahSusuPerHari} liter<br>";
$sapi->makan();
echo "<br>";
$sapi->bersuara();
echo "<br>";
echo "------------------------<br>";
echo "Kambing:<br>";
echo "Nama: {$kambing->nama}<br>";
echo "Umur: {$kambing->umur} tahun<br>";
echo "Berat Badan: {$kambing->beratBadan} kg<br>";
echo "Jumlah Wol per Hari: {$kambing->jumlahWolPerHari} gram<br>";
$kambing->makan();
echo "<br>";
$kambing->bersuara();
echo "<br>";
echo "------------------------<br>";
echo "Ayam:<br>";
echo "Nama: {$ayam->nama}<br>";
echo "Umur: {$ayam->umur} tahun<br>";
echo "Berat Badan: {$ayam->beratBadan} kg<br>";
echo "Jumlah Telur per Hari: {$ayam->jumlahTelurPerHari} butir<br>";
$ayam->makan();
echo "<br>";
$ayam->bersuara();

