<?php
    $numeros = [1,2,3,4,5,6,7,8,9,10];
    
    //Métodos para filtrar e trazer elementos de um array
    /*  Temos o método end() que ira nos trazer o último 
    *   elemento armazendo no array. Exemplo:
    */

    echo end($numeros);
    echo "<br>";

    /*
    *   Também temos o método array_filter() que gera um novo array
    * de elementos com valores especificados. 
    * Por exemplo, um array com idades onde iremos filtrar apenas as idades maiores
    * ou iguais a 18.
    *
    *   Neste método são esperados 2 parametros o primeiro é o array que iremos
    * percorrer, o segundo é um função de callback onde iremos colocar qual será
    * a lógica aplicada  
    */

    $ages = [03,20,15,14,75,80,23,18];
    $agesFiltered = array_filter($ages, function($age){
        return $age>=18;
    });

    //var_dump($agesFiltered);


    /*   Temos também o método array_map() que nos permiti formatar ou fazer 
    * alterações em todos ou alguns elementos do nosso array, como por exemplo
    * passar todos os elementos de um array de nomes para caixa alta. 
    *    Para usarmos este método passamos 2 parametros, diferente do método array_filter
    * passamos primeiro a função de callback declarando a nossa lógica, e separado por
    * virgula o array de elementos que queremos aplicar a função.Por exemplo:  
    */

    $nomes = ['jonas','joao','natasha','nicole'];

    $nomesFormatados = array_map(function($name){
        $name = strtoupper($name); 
        return $name;
    },$nomes);

    var_dump($nomesFormatados);

    /*  Uma segunda forma de aplicar o array_map() é declarando uma function separadamente e
    * passando no lugar da função de callback. Por exemplo, vamos passar o array $nomesFormatados
    * e faze-lo voltar para caixa baixa:
    */
    $names = array_map('applyToUpper',$nomesFormatados); 

    function applyToUpper($value){
        return strtolower($value);
    }
    echo "<hr>";
    var_dump($names);

?>