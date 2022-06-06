<?php

    /*  Funções de nivel global */
    /* O escopo de uma função só consegue acessar o que estiver dentro da função
    case tivermos uma situação em que iremos precisar de uma váriavel que esteja fora
    da função temos a ajuda do método nativo global que funciona da seguinte forma: */

    $taxa = 3;

    function soma(int $valor, int $valor_dois = 0)
    {
        global $taxa;

        return $valor+$taxa;
    }

    echo soma(20);
?>