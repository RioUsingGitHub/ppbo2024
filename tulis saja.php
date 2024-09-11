<?php

class Mobil {
    public $warna;
    public $model;

    public function nyalakan() {
        echo "Mobil dinyalakan";
    }

    public function matikan() {
        echo "Mobil dimatikan";
    }
}

$tesla = new Mobil();
$tesla->warna = "Merah";
$tesla->model = "Tesla Model S";
$tesla->nyalakan();



?>