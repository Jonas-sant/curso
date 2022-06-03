<?php

    /*  Exemplo de aplicação da estrutura forEach  */
    //Imprimindo apenas os valores
    $names = [1,2,3,50,84,35,45,15,2,90];

    foreach ($names as $name){
        echo "Número : {$name}.<br>";
    }
    echo "<br>";

    //Imprimindo com chave e valor
    $funcionarios = [
        'Programador'      => 'Jonas',
        'Marketing'     => 'Alfredo',
        'Mecanico'     => 'Jair'
    ];

    foreach($funcionarios as $key => $value){
        echo "{$key} : {$value}.<br>";
    }

?>