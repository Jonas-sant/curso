<?php
    $funcionario = [
        'name'      => 'Jonas',
        'idade'     =>  24,
        'cargo'     => 'Programador'
    ];

    $formacao = [
        'curso'    => 'Analise e Desenvolvimento de Sistemas',
        'linguagens'=> ['PHP','JavaScript','Python']
    ];

/*  
Mais uma função para manipulações de arrays é
o array_keys, que serve para nos informar quais 
são as chaves existentes no array. Exemplo: 
*/
//var_dump(array_keys($funcionario));

/* Ao contrário do metódo keys temos o array_values
que nos mostra apenas os valores, exemplo: */
//var_dump(array_values($funcionario));

/* Também temos o key_exists(), que é um método que verifica se a existe uma determinada chave em um array
para usarmos ela é necessário chamar a função e passar 2 parametros, o primeiro é o velor de chave que queremos checar
e o segundo é o array em que queremos fazer a verificação. Exemplo
Para vermos se existe a key 'curso' no array $formacao, o código fica assim */
//var_dump(key_exists('curso',$formacao));
//Caso exista retornara verdadeiro, caso não retornara false


/*  Outra função muito utilizadas temos o método count
que nos retorna o total de elementos dentro de um array
*/
//var_dump(count($funcionario));

/*  Temos o método array_merge que serve para juntar dois ou 
mais arrays em um. Exemplo: */
$info_funcionario = array_merge($funcionario,$formacao);
var_dump($info_funcionario);
?>