<?php
class Operaciones {
    private $num1;

    public function __construct($a) {
        $this->num1 = $a;
    }

    public function Celsius () {
        return $this->num1;
    }

    public function Fahrenheit() {
        return ($this->num1 * 1.8) +32;
    }

    public function Kelvin() {
        return $this->num1 +273.15;
    }

}
