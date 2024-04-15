<?php

class Palabra {
    private $palabra;
    private $color;
    private $color_fondo;

    public function __construct($palabra, $color, $color_fondo) {
        $this->palabra = $palabra;
        $this->color = $color;
        $this->color_fondo = $color_fondo;
    }

    public function cuadrado() {
        echo "<table border='1' style='color:{$this->color}; background-color:{$this->color_fondo};'>";
        
        $len = strlen($this->palabra);
        
        for ($i = 0; $i < $len; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $len; $j++) {
                $char = ($j == $i) ? $this->palabra[$j] : ' ';
                echo "<td>{$char}</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }

    public function diagonal() {
        echo "<table border='1' style='color:{$this->color}; background-color:{$this->color_fondo};'>";
        
        $len = strlen($this->palabra);
        
        for ($i = 0; $i < $len; $i++) {
            echo "<tr><td>{$this->palabra[$i]}</td></tr>";
        }
        
        echo "</table>";
    }
}

