<?php
/*
* Descripción: Se pide un número del 1 al 10 y se da la tabla que le corresponde ACT 6
* Autor:Paolo Alexander Hernandez P
*/

$tabla = $_POST['tabla']; //Extrae Tabla

    echo "<h1>Tabla de Multiplicar del número $tabla </h1>";
        for ($i=1; $i <=10 ; $i++){
            echo "<h3> $tabla x $i = ( ", $i*$tabla, " )", "<br> </h3>";
        };

?>        