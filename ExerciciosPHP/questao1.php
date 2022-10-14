<?php

$numero1 = $_GET['num1'];
$numero2 = $_GET['num2'];
$resultado = $numero1 + $numero2;


if ($resultado > 20) {
    $resultado = $resultado + 8;
}

if ($resultado <= 20) {
    $resultado = $resultado - 5;
}
echo "O número é $resultado";
