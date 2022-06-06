<?php
    $str = 'www.codedevs.com.br';

    /* O método str_replace(), serve para substituir pedaços da nossa string 
    recebendo 3 parâmetros o primeiro é o que queremos substituir, o segundo é
    pelo que queremos substituir e o terceiro passamos a string que será 
    modificada. Por exemplo, vamos substituir da string $str os pontos por espaços em branco.  */

    echo "Método str_replace(), substituindo pontos por espaços em branco(".$str."). :<br>";
    echo str_replace('.',' ',$str);
    echo "<hr>";

    /* o método substr(), nos retornara apenas um pedaço da nossa string, 
    a forma de utilizar este método é passando como parâmetro a string que queremos 
    manipular, o ponto de inicio que queremos e o numero de carateres que iremos pegar.
    Por exemplo, vamos pegar apenas o codedevs da nossa string:

    */

    echo "Método substr(),pegando apenas o codedevs (".$str."). :<br>";
    echo substr($str,4,8);

    /* Temos também o strlen que nos diz quantos caracteres tem a string */
    echo"<br>";
    echo "Método strlen(), que nos diz quantos caracteres tem a string: ";
    echo strlen($str);

?>