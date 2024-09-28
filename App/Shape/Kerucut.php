<?php

namespace App\Shape;

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