<?php
class Escuderia{

    //ATRIBUTOS
    private $nombre;
    private $sede;

    //GETTERS & SETTERS
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getSede(){
        return $this->sede;
    }

    public function setSede($sede){
        $this->sede = $sede;
    }

    //CONSTRUCTOR
    public function __construct($nombre,$sede){

    }

}


?>
