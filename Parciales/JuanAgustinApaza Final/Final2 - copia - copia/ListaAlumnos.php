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

class ListaAlumnos {
    private $lista;

    public function __construct() {
        $this->lista = [];
    }

    public function insertarAlumno($CU, $nombres, $apellidos) {
        $alumno = new Alumno($CU, $nombres, $apellidos);
        array_push($this->lista, $alumno);
    }

    public function eliminarAlumno() {
        array_pop($this->lista);
    }

    public function mostrarLista() {
        echo "<table border='1'>";
        echo "<tr><th>CU</th><th>Nombres</th><th>Apellidos</th><th>Acción</th></tr>";
        foreach ($this->lista as $alumno) {
            echo "<tr>";
            echo "<td>" . $alumno->CU . "</td>";
            echo "<td>" . $alumno->nombres . "</td>";
            echo "<td>" . $alumno->apellidos . "</td>";
            echo "<td><button onclick='eliminarAlumno(\"{$alumno->CU}\")'>Eliminar</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
