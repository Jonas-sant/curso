<?php

/*  Usando o método compact() para montar arrays
O método compact é usado para montar um array, passando os
nomes das variáveis que serão colocadas no array.Por Exemplo
*/    

$nome   = 'Jonas';
$idade  = 24;
$profissao = 'Programador';

$funcionario = compact('nome','idade','profissao');
//var_dump($funcionario);


/*  Outra função que nos auxilia no dia a dia é o is_array 
que verifica se o objeto passado é um array, e nos retorna 
true ou false 
*/
//var_dump(is_array($funcionario));   


/* Outro método para usarmos em arrays no php é o in_array, 
que verifica se o valor passado está no array e nos retorna 
um true ou false.
   Passamos dois parametros dentro para o método in_array(),
o primeiro parametro é o valor que queremos buscar e o segundo 
é em qual array queremos buscar. Exemplo:
*/

var_dump(in_array('Jonas Wednes',$funcionario));

?>