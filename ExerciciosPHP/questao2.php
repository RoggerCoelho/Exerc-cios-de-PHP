<?php
$numero3 = $_GET['num3'];

if ($numero3 % 10 == 0) {
    echo "$numero3 é divisível por 10. ";
    
} else if ($numero3 % 5 == 0) {
    echo "$numero3 é divisível por 5. ";

} else if ($numero3 % 2 == 0) {
    echo "$numero3 é divisível por 2. ";
    
} else {
    echo "$numero3 não é divisível por 10, 5 ou 2. ";
}
