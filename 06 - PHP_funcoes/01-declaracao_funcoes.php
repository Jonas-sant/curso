<?php

/*  Funções em PHP, ao declarar uma função m php é de boa prática que se
coloque as chaves na linha abaixo do nome da função.Por Exemplo: */

function imprimeNome($name) : String //<<-declarando o tipo de retorno
{
    return "{$name} Santos<br>";
}

/*  Dentro dos parenteses após o nome da função, passamos os parâmetros
que nossa function irá usar para o código
*/

echo imprimeNome("Jonas");//<~ Aqui acontece uma chamada de função e passando um nome como parâmetro.
echo imprimeNome("Felipe");
echo imprimeNome("Adalberto");

//Função com parâmetro opcional, \/ Setando o tipo de dado que será reebido
function imprime(String $frase1, String $frase='Bom Dia') : String
{
    return $frase1."".$frase;
}

echo imprime("Olá Jonas, ");

?>