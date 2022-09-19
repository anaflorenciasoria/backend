<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><b>BACKEND: <br>
        Trabajo práctico N°2</b></h1>
<br><br>

<h3>Ejercicio 1</h3>
<br>
<?php
$a = 1;
if($a>=0){
    echo "El valor ingresado es: $a. La variable asume valores positivos";
}
else{
    echo "El valor ingresado es negativo" ;
}
?>
<hr>
<h3>Ejercicio 2</h3>
<br>
<?php
$b = 8;
if ($b>1 & $b<10) {
    echo "El valor ingresado es: $b .Se encuentra dentro del rango (1;10).";
}
else {
    echo "La variable toma valores fuera del rango permitido (1;10)" ;
}
?>
<hr>
<h3>Ejercicio 3</h3>
<br>
<?php
$c = -18;
if ($c>10 || $c<2) {
    echo "El valor ingresado es: $c. Pertenece al intervalo: (-inf;2)U(10;inf)." ;
}
else {
    echo "La variable toma valores fuera del intervalo: (-inf;2)U(10;inf)" ; 
}
?>
<hr>
<h3>Ejercicio 4</h3>
<br>
<?php
$numero1 = 4;
$numero2 = 4;
if ($numero1 > $numero2) {
   echo $numero1 + $numero2 ;
   echo $numero1 - $numero2 ;
} elseif ($numero1 < $numero2) {
    echo $numero1 * $numero2 ;
    echo $numero1 / $numero2 ;
    echo $numero1 % $numero2 ;
}
else {
    echo "Los números ingresados ($numero1) son iguales" ;
}
?>
</body>
</html>