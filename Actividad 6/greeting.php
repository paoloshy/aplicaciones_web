<?php
/*
ALUMNO: Paolo Alexander Hernandez P
DESCRIPCIÓN: ACTIVIDAD 6 Greeting
*/
    $nombre = $_POST['name'];
    $edad = $_POST['age'];
    $tel = $_POST['tel'];

    echo "Hola $nombre";
            echo "<hr>";
    echo "Tú Edad es: $edad";
            echo "<hr>";
    echo"Tú Teléfono es: $tel";
            echo "<hr>";
    echo "<a href='greetingForm.html'>Regresar</a>";
?>