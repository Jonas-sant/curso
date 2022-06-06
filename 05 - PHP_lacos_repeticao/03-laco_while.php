<?php

    /* Aplicação da estrutura de repetição while em PHP */
    //A estrutura while ira executar uma instrução até que a condição
    //se torne falsa

    $i = 1;

    while($i<=0){
        echo $i."<br>";
        $i++;
    }

    /* Também temos o do while que funciona da mesma forma 
    porém, ele executa o código e depois faz a comparação, por tanto
    mesmo que a condição seja falsa ele ira executar pelo menos
    uma vez.Por exemplo:
    */
    do{
        echo "Mesmo que seja false<br>";
        $i++;
        echo $i."</br>";

    }while($i<=0);
?>