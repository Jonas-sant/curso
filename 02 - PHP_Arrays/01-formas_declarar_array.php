<?php
/* A primeira maneira e a mais antiga de declararmos um array é */
//$car = array('Porshe',911,5.3);
//var_dump($car); 

/*
    Para acessar um valor especifico do array colocamos o nome do array
    e passando o indice desejado entre conchetes. Por Exemplo:
*/
//var_dump($car[0]);

/*
    Uma segunda maneira de declarar um array é :
*/

//$cars = ['Porshe','BMW','Mercedes','Volkswagen'];
//var_dump($cars);

/*  Outra forma de criar um array de informações 
chamado de array composto ou associativo
$car = [
    'cor'=>'Branco',
    'portas'=>4,
    'ano'=>2021,
    'montadora'=>'Volkswagen',
    'modelo'=>'Passat'
];
 
    Para acessarmos os indices do array é preciso passar 
    o nome do indice ao invés de colocar números.Exemplo:

var_dump($car['montadora']);
*/

/*
    Outro tipo de array comum são os arrays Multidimensionais
    que são arrays dentro de outros arrays.Por Exemplo:
*/
$cars = [ 
    'C180' => [
        'color'=>'Black',
        'motor'=>3.0,
        'montadora'=>'Mercedes'
    ],
    'Evoque'=>[
        'color'=>'Branco',
        'motor'=>2.6,
        'montadora'=>'Range Rover'
    ],
    'Fusca'=>[
        'color'=>'Preto',
        'motor'=>1.6,
        'montadora'=>'Volkswagen'
    ]
    ];
/* Para acessar este array passamos 2 indices. Exemplo */
//var_dump($cars['C180']['color']);

/*  Redefinindo valor de um array multidimensional */
$cars['C180']['color'] = 'Branco';
var_dump($cars['C180']['color']);

?>