<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php

        require_once"Escuderia.php";
        require_once"Piloto.php";

        $piloto1 = new Piloto("Alex",1,23);
        $piloto2 = new Piloto("Sandra",2,22);
        $piloto3 = new Piloto("Pau",3,20);

        $escuderia1 = new Escuderia("Ferrari","España");
        $escuderia1->anyadirPiloto($piloto1);
        $escuderia1->anyadirPiloto($piloto2);
        $escuderia1->anyadirPiloto($piloto3);

        echo $escuderia1;

        $piloto4 = new Piloto("Jorge",4,19);
        $piloto5 = new Piloto("Nacho",5,16);
        $piloto6 = new Piloto("Drako",6,25);
        
        echo '<hr width="200" align="left"><br>';
        
        $escuderia2 = new Escuderia("Ford","Alemania");
        $escuderia2->anyadirPiloto($piloto4);
        $escuderia2->anyadirPiloto($piloto5);
        $escuderia2->anyadirPiloto($piloto6);

        echo $escuderia2;
        ?>

    </body>
</html>


<!--Autor: Alejandro -->