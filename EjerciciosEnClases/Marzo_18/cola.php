<?php

class Cola {
    private $elementos;
    private $primero;
    private $ultimo;


    function __Cola(){
        $this->elementos=array();
        $this->primero=0;
        $this-> ultimo=0;

    }

    function insertar($valor){
        $this->elementos[$this->ultimo]=$valor;
        $this->ultimo ++;

    }

    function eliminar(){
        if($this->primero==$this->ultimo){
            echo "La cola esta vacia";
        }
        else{
            $valor=$this->elementos[$this->primero];
            unset($this->elementos[$this->primero]);
            $this->primero++;
            return $valor;
            
         }
    }


    function mostrar(){
        if($this->primero==$this->ultimo){
            echo "La cola esta vacia";
        }
        else{
            for($i=$this->primero; $i<$this->ultimo;$i++){
                echo $this->elementos[$i]." ";
            }
            
        }
    }

    }




?>