<?php

namespace App\Shape;

class BangunRuang {
    protected $phi = 3.14;
    protected $jari;

    public function __construct($jari) {
        $this->jari = $jari;
    }
}