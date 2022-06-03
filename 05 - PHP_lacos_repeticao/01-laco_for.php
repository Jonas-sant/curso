<?php
   /*  Exemplo de aplicação da estrutura de repetição for  */

    for($i = 0; $i<10; $i++){
        echo "{$i}<br>";
    }

    echo '<hr>';

    $name = ['Jonas','Nicole','Josi','José'];

    for($i = 0; $i<count($name); $i++){
        echo "{$name[$i]}<br>";
    }

?>