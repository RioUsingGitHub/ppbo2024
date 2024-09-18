<?php

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