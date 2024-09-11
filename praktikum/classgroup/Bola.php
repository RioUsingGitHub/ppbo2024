<?php

class Bola extends BangunRuang {

    public function __construct($jari) {
        parent::__construct($jari);
    } 
    
    public function volumeBola() : float {
        return (4/3) * $this->phi * pow($this->jari, 3);
    }
}