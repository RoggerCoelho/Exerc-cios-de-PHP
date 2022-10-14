<?php
$num1 = $_POST['num5'];
$num2 = $_POST['num6'];
$num3 = $_POST['num7'];



if ($num1 >= $num2 && $num1 >= $num3) {
    if ($num2 >= $num3) {
        echo "$num1, $num2, $num3";
    } else {
        echo "$num1, $num3, $num2";
    }
} else if ($num2 >= $num1 && $num2 >= $num3) {
    if ($num1 >= $num3) {
        echo "$num2, $num1, $num3";
    } else {
        echo "$num2, $num3, $num1";
    }
} else {
    if ($num2 >= $num1) {
        echo "$num3, $num2, $num1";
    } else {
        echo "$num3, $num1, $num2";
    }
}


?>

