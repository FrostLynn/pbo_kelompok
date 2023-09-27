<?php

include 'hewanTernak.php';

class Sapi extends HewanTernak {

    public function __construct($nama, $umur, $beratBadan) {
        parent::__construct($nama, $umur, $beratBadan);
    }
    public function bersuara() {
        echo "{$this->nama} mengeluarkan suara: Moo! <br>";
    }
}

class Kambing extends HewanTernak {

    public function __construct($nama, $umur, $beratBadan) {
        parent::__construct($nama, $umur, $beratBadan);
    }
    public function bersuara() {
        echo "{$this->nama} mengeluarkan suara: Mbek! <br>";
    }
}

class Ayam extends HewanTernak {

    public function __construct($nama, $umur, $beratBadan) {
        parent::__construct($nama, $umur, $beratBadan);
    }
    public function bersuara() {
        echo "{$this->nama} mengeluarkan suara: Kukuruyuk! <br>";
    }
}

class Bebek extends HewanTernak {

    public function __construct($nama, $umur, $beratBadan) {
        parent::__construct($nama, $umur, $beratBadan);
    }
    public function bersuara() {
        echo "{$this->nama} mengeluarkan suara: Wek-wek! <br>";
    }
}

class Babi extends HewanTernak {

    public function __construct($nama, $umur, $beratBadan) {
        parent::__construct($nama, $umur, $beratBadan);
    }
    public function bersuara() {
        echo "{$this->nama} mengeluarkan suara: Ngok! <br>";
    }
}

?>