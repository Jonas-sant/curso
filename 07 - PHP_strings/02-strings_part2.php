<?php
    /* Métdos de para tratamento de strings  */
    
    $name = ' Jonas   ';
    echo "Antes do tratamento: ";
    var_dump($name);
    echo "<hr>";

    /*   Primeiramente vamos ver o método ltrim() para remover os 
    espaços em branco do começo da nossa string.Para usar o método ltrim 
    precisamos apenas passar nossa string como parâmetro.*/
    echo "Depois do tratamento, usando ltrim() : ";
    var_dump(ltrim($name));
    echo "<hr>";

    /* Também temos o rtrim que remove o espaço do final da nossa string
    e usamos da mesma forma do ltrim */
    echo "Depois do tratamento, usando o rtrim() : ";
    var_dump(rtrim($name));
    echo "<hr>";

    /* Também temos o método trim() que se torna o mais versátil que retira os
    espaços tanto do começo quanto do final da string. */
    echo "Depois do tratamento, usando o trim() : ";
    var_dump(trim($name));


?>