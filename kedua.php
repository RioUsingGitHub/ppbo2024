<?php

class Rumus {

    private $phi = 3.14;

    public function luasLingkaran($jari) : float {
        return $this->phi * pow($jari, 2);
    }

    public function kelilingLingkaran($jari) : float {
        return 2 * $this->phi * $jari;
    }

    public function volumeBola($jari) : float {
        return (4/3) * $this->phi * pow($jari, 3);
    }

    public function volumeTabung($jari, $tinggi) : float {
        return $this->phi * pow($jari, 2) * $tinggi;
    }

    public function volumeKerucut($jari, $tinggi) : float {
        return (1/3) * $this->phi * pow($jari, 2) * $tinggi;
    }
}

$hitung = new Rumus();

$luas_tanah = $hitung->luasLingkaran(45);
$keliling_tanah = $hitung->kelilingLingkaran(45);
$volume_bola = $hitung->volumeBola(45);
$volume_tabung = $hitung->volumeTabung(45, 25);
$volume_kerucut = $hitung->volumeKerucut(45, 25);

echo "Luas tanah Budi adalah: {$luas_tanah}\n";
echo "Keliling tanah Budi adalah: {$keliling_tanah}\n";
echo "Volume bola adalah: {$volume_bola}\n";
echo "Volume tabung adalah: {$volume_tabung}\n";
echo "Volume kerucut adalah: {$volume_kerucut}\n";

$nasi_tumpeng = new Rumus();

$nasi_tumpeng = $hitung->volumeKerucut(4, 10);

echo "\nVolume dari Nasi Tumpeng kurang lebih: {$nasi_tumpeng}\n";
?>
