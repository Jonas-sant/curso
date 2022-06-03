<?php
/*  Funções de Ordenação de array */

$compras = ['Macarrão','Arroz','Jujuba','Zarabatana','Batata'];
$numeros = [1,15,20,2,100,1.5];

/*      
* Como primeira função de ordenação de array temos o sort ou o asort 
*que ordena os elementos do array do menor para o maior ou 
*em ordem alfabética de A-Z, de acordo com os elementos contidos
*no array.
* No sort os elementos são ordenados,trocando também os indices, já no 
asort, os elementos são reordenados porém os indices continuam os mesmos
*/

//sort($compras); 
//asort($numeros);

//var_dump($compras);
//echo "<br>";
//var_dump($numeros);
//_______________________________________________________________________


/*
*   No arsort ordenamos os elementos de forma decrescente, do maior 
*para o menor mantendo seus indices originais.
*   Também temos o rsort que além de ordenar os elementos, 
*também reordena os indices
*/

rsort($compras);
var_dump($compras);

?>