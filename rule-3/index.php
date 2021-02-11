<?php

class CPF {

    public $number;

    public function __construct($number) {
        $this->number = $this->unmask($number);
    }

    public function unmask($number = "") {
        // código
    }

    public function mask($number = "") {
        // código
    }

}

$cpf = new CPF('022.975.160-10');