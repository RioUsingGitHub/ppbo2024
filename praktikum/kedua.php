<?php

class BangunRuang {
    protected $phi = 3.14;
    protected $jari;

    public function __construct($jari) {
        $this->jari = $jari;
    }
}

class Lingkaran extends BangunRuang {

    public function __construct($jari) {
        parent::__construct($jari);
    } 

    public function luasLingkaran() : float {
        return $this->phi * pow($this->jari, 2);
    }

    public function kelilingLingkaran() : float {
        return 2 * $this->phi * $this->jari;
    }
}

class Bola extends BangunRuang {

    public function __construct($jari) {
        parent::__construct($jari);
    } 
    
    public function volumeBola() : float {
        return (4/3) * $this->phi * pow($this->jari, 3);
    }
}

class Tabung extends BangunRuang {
    protected $tinggi;

    public function __construct($jari, $tinggi) {
        parent::__construct($jari);
        $this->tinggi = $tinggi;
    }

    public function volumeTabung() : float {
        return $this->phi * pow($this->jari, 2) * $this->tinggi;
    }
}

class Kerucut extends BangunRuang {
    protected $tinggi;

    public function __construct($jari, $tinggi) {
        parent::__construct($jari);
        $this->tinggi = $tinggi;
    }

    public function volumeKerucut() : float {
        return (1/3) * $this->phi * pow($this->jari, 2) * $this->tinggi;
    }
}

$lingkaran = new Lingkaran(45);
echo "Luas Lingkaran: " . $lingkaran->luasLingkaran() . "\n";
echo "Keliling Lingkaran: " . $lingkaran->kelilingLingkaran() . "\n";

$bola = new Bola(45);
echo "Volume Bola: " . $bola->volumeBola() . "\n";

$tabung = new Tabung(45, 25);
echo "Volume Tabung: " . $tabung->volumeTabung() . "\n";

$kerucut = new Kerucut(45, 25);
echo "Volume Kerucut: " . $kerucut->volumeKerucut() . "\n";

$nasi_tumpeng = new Kerucut(4, 10);
echo "\nVolume dari Nasi Tumpeng kurang lebih: " . $nasi_tumpeng->volumeKerucut() . "\n";
?>
