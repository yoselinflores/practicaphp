<?php
echo "my first PHP script";
echo "<br>";
echo " Mis datos";
$nombre = " Maira Joselin";
$edad = 19;
$estatura = 1.60;
echo " soy...". strtoupper ($nombre). " tengo". $edad. " años y mido". $estatura. "metros";
echo "<br>";
var_dump(is_int($nombre));
echo"<br>";

$x = 34;
$y = 356.78;
$z = $x+$y;
echo "La suma es $x + $y = $z <br>";
echo"<br>";
$x = 34;
$y = 25;
$z = $x*$y;
echo "La multiplicacion es $x * $y = $z <br>";
echo"<br>";
$x = 100;
$y = 25;
$z = $x-$y;
echo "La resta es $x - $y = $z <br>";
echo"<br>";
$x = 250;
$y = 25;
$z = $x/$y;
echo "La Divicion es $x / $y = $z <br>";
echo"<br>";
$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;
echo "La potencia es $base elevado a $exponente es: $potencia";
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PRACTICA PHP</title>
</head>
<body>
    HOLA!!
</body>
</html>