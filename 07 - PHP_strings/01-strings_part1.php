<?php

    /* Métodos de manipulação de string */

    $name = 'jonas santos';

    /* Primeiro método é o strtoupper() que transforma todos os caracteres para maiusculo */
    echo "strtoupper() : ".strtoupper($name);
    echo "<hr>";

    /*  O oposto do método toupper é o strtolower() que transforma todos os caracteres em minusculo */
    echo "strtolower() : ".strtolower($name);
    echo "<hr>";

    /* Também temos o método ucfirst() que transforma  primeiro caratere  da string em maiusculo */
    echo "ucfirst() : ".ucfirst($name);
    echo "<hr>";

    /* O método ucwords() que transforma a primeira letra de cada palavra em maiusculo */
    echo "ucwords() : ".ucwords($name);
    echo "<hr>";



    /* Temos o métdodo  explode() que transforma uma string em um array, este método
    recebe dois parâmetros onde o primeiro é o delimitador e o segundo é
    a string onde aplicaremos o método. Por Exemplo: */
    $str = "O melhor conteudo de programação do Brasil";
    $arrayStr = explode(" ",$str);//Passamos como delimitador os espaços em branco
    echo "<pre>"; 
    var_dump($arrayStr);
    echo "</pre>";
    echo "<hr>";

    /* Também temos o método reverso do explode que é o implode, usado para transformar 
    um array em uma string, recebendo como parâmetro um elemento de junção e o array que iremos
    aplicar o método. */
    echo "Métdo implode() : ".implode(" ",$arrayStr);


?>