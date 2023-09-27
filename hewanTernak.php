<?php

abstract class HewanTernak {
    public $nama;
    private $umur;
    private $beratBadan;

    public function __construct($nama, $umur, $beratBadan) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->beratBadan = $beratBadan;
    }

    public function set_umur($n) {
        $this->umur = $n;
    }

    public function set_beratBadan($n) {
        $this->beratBadan = $n;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function getBeratBadan() {
        return $this->beratBadan;
    }

    public function bersuara() {
        echo "Hewan mengeluarkan suara <br>";
    }
}

?>