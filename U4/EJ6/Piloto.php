<?php
class Piloto{

    //ATRIBUTOS
    private $nombre;
    private $dorsal;
    private $edad;

    //GETTERS & SETTERS
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getDorsal(){
        return $this->dorsal;
    }

    public function setDorsal($dorsal){
        $this->dorsal = $dorsal;
    }

    public function getEdad(){
        return $this->edad;
    }

    //CONSTRUCTOR
    public function __construct($nombre,$dorsal,$edad){
        $this->nombre=$nombre;
        $this->dorsal=$dorsal;
        $this->edad=$edad;
    }

    //METODOS
    public function __toString(){
        return "-Nombre: $this->nombre <br> -Dorsal: $this->dorsal <br> -Edad: $this->edad";
    }
}


?>
