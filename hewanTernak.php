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

    function set_umur($n) {
        $this->umur = $n;
    }

    function set_beratBadan($n) {
        $this->beratBadan - $n;
    }

    public function bersuara() {
        echo "Hewan mengeluarkan suara <br>";
    }
}

class sapi extends HewanTernak {
    public function bersuara() {
        echo "{$this->nama} mengeluarkan suara: Moo! <br>";
    }
}

?>