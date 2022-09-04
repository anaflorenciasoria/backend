<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend-Tp N°1</title>
</head>
<body>
    <h1><b>BACKEND: <br>
        Trabajo práctico N°1</b></h1>
<br><br>
    <h3>Ejercicio 1)</h3>
<br>
    <?php
    echo "Hola mundo";
    ?>
<hr>
<br>
    <h3>Ejercicio 2)</h3>
<?php
$saludo = "Hola mundo";
echo $saludo;
?>
<br>
<hr>
<br>
<h3>Ejercicio 3)</h3>
<p>Variables: Velocidad inicial y final expresadas en km/h</p>
<?php
$velocidad_in = 30;
$velocidad_fi = 100;
echo "<p>Velocidad inicial: $velocidad_in km/h, <br> Velocidad final: $velocidad_fi km/h </p>\n";
?>
<ul>
    <li>Suma de variables:</li>
<?php
//suma
echo $velocidad_fi + $velocidad_in ;
?>
<br>
    <li>Tasa de cambio:</li>
<?php
//resta 
echo $velocidad_fi - $velocidad_in ;
?>
<br>
    <li>Producto escalar:</li>
<?php
//multiplicación
echo $velocidad_in * $velocidad_fi ;
?>
<br>
    <li>Cociente:</li>
<?php
//división
echo $velocidad_fi / $velocidad_in ;
?>
<br>
    <li>Resto</li>
<?php
//resto 
echo $velocidad_fi % $velocidad_in ;
?>
</ul>
<hr>
<br>

<h3>Ejercicio 4)</h3>
<p>La expresión a utilizar: °F= (°C x 1,8) + 32. <br>
Para °C=20:</p>
<?php
$celsius = 20;
echo ($celsius * 1.8) + 32 ; 
?>
<hr>
<br>
<h3>Ejercicio 5)</h3>
    <ol type="a">
        <li>Rectángulo:</li>
            <?php
                $base = 18;
                $altura = 12;
                echo "<p> Base: $base cm <br> Altura: $altura cm </p>\n"
            ?>
                <ul>
                     <li>Perímetro:</li>
                        <?php
                        echo $base * 2 + $altura * 2 ;
                        ?>
                     <li>Área:</li>
                        <?php
                        echo $base * $altura ;
                        ?>
                </ul><br>

        <li>Círculo:</li>
            <?php
                $radio = 30;
                echo "<p> Radio: $radio cm </p>\n"
            ?>
                <ul>
                    <li>Perímetro:</li>
                        <?php
                        echo 2 * 3.141592 * $radio ;
                        ?>
                    <li>Área:</li>
                        <?php
                        echo 3.141592 * $radio**2 ;
                        ?> 
                </ul>

    </ol>
<hr>
</body>
</html>