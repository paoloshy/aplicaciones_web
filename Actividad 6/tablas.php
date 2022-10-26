<?php
/*  Autor:Paolo Alexander Hernandez P ACT 6 */

$tabla = $_POST['tabla']; 

    echo "<h1>Tabla de Multiplicar del número $tabla </h1>";
        for ($i=1; $i <=10 ; $i++){
            echo "<h3> $tabla x $i = ( ", $i*$tabla, " )", "<br> </h3>";
        };

?>        