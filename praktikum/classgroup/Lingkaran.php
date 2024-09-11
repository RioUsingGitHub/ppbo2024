<?php

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