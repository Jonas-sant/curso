<?php
    /*
        Alguns métodos simples para manipulação 
    */

    $cart = ['Arroz', 'Sabao','Milho','Amendoim','Amendoim'];
/*Método array_pop, serve para retirar o ultimo elemento de 
um array que será o amendoim*/
    //var_dump($cart);
    //echo "<br>";
    //array_pop($cart);
    //var_dump($cart);    


/* 
  Método array_shift, serve para remoção do primeiro elemento 
  de um array que será o Arroz   
*/
    //array_shift($cart);
    //var_dump($cart);

/*
  Com o método unset podemos remover um elemento especifico
passando o indice de identificação do elemento, caso não passemos
o indice o array inteiro será apagado.Exeplo:
*/
    //unset($cart[2]);
    //Neste caso será retirado o milho
    //var_dump($cart);

/*
   Também podemos adicionar elementos em um array através do método
   array_push, que irá adicionar após o ultimo elemento da lista, 
   passando dois parametros o primeiro é o array que recebera o valor
   e o segundo é valor desejado.
*/
    //array_push($cart,'Feijão');
    //var_dump($cart);

/*  Para adicionar um elemento no inicio do array usamos o método
    array_unshift(), passando dois parametros o primeiro é o array
    que receberá e elemento e o segundo é o elemento que será inserido
    no array. Exemplo */
    //array_unshift($cart,'Caramelo');
    //var_dump($cart);


/*
    Para remover items duplicados de um array usamos o método array_unique, passamos 
    como parametro o array que queremos fazer a filtragem, e a variavel que 
    armazenara o novo array pode ser o mesmo array que será filtrado
    Por Exemplo:

*/   
    $cart = array_unique($cart);
    var_dump($cart);

?>