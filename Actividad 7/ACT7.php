<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vota</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="estilo7.css">
<div class="blockquote-wrapper">
  <div class="blockquote">
    
    <h1>
        <span style="color:#FFDA33">
<?php
/* No podras votar si tienes mas de 80*/
$edad = 80;
 
 echo "Su edad es: $edad";
 echo "<br>";
if ($edad >= 18) {
    echo "Puedes Votar";
} else {
    echo "No puedes Votar";
}
?> 

<h4>&mdash;Paolo A Hernandez P <br>
Desarrolla Aplicaciones Web<br></h4>
</div>
</div>
</body>
</html>