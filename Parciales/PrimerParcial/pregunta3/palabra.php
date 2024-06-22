<?php
// Definimos la clase Palabra
class Palabra {
    // Propiedades de la clase
    public $palabra;      // La palabra a mostrar
    public $color;        // El color del texto
    public $color_fondo;  // El color de fondo

    // Constructor de la clase
    public function __construct($palabra, $color, $color_fondo) {
        // Inicializamos las propiedades
        $this->palabra = $palabra;
        $this->color = $color;
        $this->color_fondo = $color_fondo;
    }

    // Método para mostrar la palabra en forma de cuadrado
    public function mostrarCuadrado() {
        $len = strlen($this->palabra);  // Longitud de la palabra
        echo "<div style='display: inline-block;'>";
        // Fila superior
        for ($i = 0; $i < $len; $i++) {
            echo "<div style='color: $this->color; background-color: $this->color_fondo; display: inline-block; padding: 5px;'>{$this->palabra[$i]}</div>";
        }
        echo "<br>";
        // Filas del medio
        for ($i = 1; $i < $len - 1; $i++) {
            echo "<div style='color: $this->color; background-color: $this->color_fondo; display: inline-block; padding: 5px;'>{$this->palabra[$i]}</div>";
            for ($j = 1; $j < $len - 1; $j++) {
                echo "<div style='display: inline-block; padding: 5px;'>&nbsp;</div>";
            }
            echo "<div style='color: $this->color; background-color: $this->color_fondo; display: inline-block; padding: 5px;'>{$this->palabra[$len - $i - 1]}</div>";
            echo "<br>";
        }
        // Fila inferior
        for ($i = 0; $i < $len; $i++) {
            echo "<div style='color: $this->color; background-color: $this->color_fondo; display: inline-block; padding: 5px;'>{$this->palabra[$len - $i - 1]}</div>";
        }
        echo "</div>";
    }

    // Método para mostrar la palabra en forma diagonal
    public function mostrarDiagonal() {
        $len = strlen($this->palabra);  // Longitud de la palabra
        echo "<div style='display: inline-block;'>";
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo "<div style='display: inline-block; padding: 5px;'>&nbsp;</div>";
            }
            echo "<div style='color: $this->color; background-color: $this->color_fondo; display: inline-block; padding: 5px;'>{$this->palabra[$i]}</div><br>";
        }
        echo "</div>";
    }
}
