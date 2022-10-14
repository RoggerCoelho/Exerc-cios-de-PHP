<?php
$lado1 = $_POST['num8'];
$lado2 = $_POST['num9'];
$lado3 = $_POST['num10'];


if ($lado1 == $lado2 && $lado1 == $lado3){
    echo "Triângulo Equilátero!";
} else if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
    echo "Triângulo Isósceles!";
} else {
    echo "Triângulo Escaleno!";
}


?>