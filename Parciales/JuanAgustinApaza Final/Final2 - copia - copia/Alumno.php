<?php
class Alumno {
    public $CU;
    public $nombres;
    public $apellidos;

    public function __construct($CU, $nombres, $apellidos) {
        $this->CU = $CU;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }
}
