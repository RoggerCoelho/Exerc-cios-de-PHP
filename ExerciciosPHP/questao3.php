    <?php

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $varAux = ['Feminino'];
    if ($sexo == 'Feminino' && $idade < 25) {
        echo "ACEITA!";
    } else {
        echo "NÃO ACEITA!";
    };
