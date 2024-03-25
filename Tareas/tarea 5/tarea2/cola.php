<?php 

class Cola{
    private $primero;
    private $ultimo;
    private $dato;

    public function __construct($primero, $ultimo, $dato){
        $this->primero = $primero;

    }


    function __Cola(){
        $this->primero = 0;
        $this->ultimo = 0;
        $this->dato = array();
    }

    function insert($valor){
        $this -> dato[$this->ultimo]=$valor;
        $this -> ultimo ++;
    }

    function eliminar(){
        if($this->primero == $this->ultimo){
            echo "la cola esta vacia";
        }
        else{
            $valor = $this -> dato[$this -> primero];
            $this -> primero;
            return $valor;
        }
    }
    function mostrar(){
        if($this->primero == $this->ultimo){
            return "la cola esta vacia";
        }
        else{
            for($i = $this ->)

        }
    }
}

