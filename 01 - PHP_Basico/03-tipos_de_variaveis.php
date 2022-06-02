<?php
    //Voltar na aula 12 da seção 03
    // Toda declaração de váriavel começa com $ exemplo:
    $name = 'Jonas Santos';
    echo('Valor da váriavel original: '.$name.'<br>');

    /*
        O php é uma linguagem fracamente tipada por isso basta declararmos
        o nome da váriavel, também podemos redeclarar as váriaveis com tipos diferentes
    */
    $name = 23;
    echo ('Valor da variável redeclarada: '.$name.'<br>');
    
    /*
        Constantes
        Para declararmos uma constante utilizamos o método define(), passando como parâmetro o nome da constante e o valor. Exemplo:
    */
    define('NOME_CONSTANTE',350);
    echo ('Valor de uma constante: '.NOME_CONSTANTE.'<br>');
    
    /*  Outra maneira de declarar uma constante é */
    const NOVA_CONSTANTE = 320;
    echo ('Constante declarada de outra forma: '.NOVA_CONSTANTE);

?>  