<?php
class Escuderia{

    //ATRIBUTOS
    private $nombre;
    private $sede;
    private $pilotos;

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
        $this->nombre=$nombre;
        $this->sede=$sede;
    }

    //METODOS
    public function __toString(){
        $msg="";
        foreach($this->$pilotos as $valor){
            $msg="~Piloto: ".$valor->getNombre()."<br>~Dorsal: ".$valor->getDorsal()."<br>~Edad: ".$valor->getEdad();
        }
        return "-Nombre: $this->nombre <br> -Sede: $this->sede <br>//////////////////////////// PILOTOS <br><br>".$msg;
    }

    public function anyadirPiloto($unPiloto){
        if($unPiloto instanceof Piloto){
            $this->pilotos[]=$unPiloto;
        }
    }
}
