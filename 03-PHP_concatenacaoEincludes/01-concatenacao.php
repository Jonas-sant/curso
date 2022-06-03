<?php

    /*  Maneiras de concatenação em PHP  */
    
    //Usando o . 
    /* 
        Podemos concatenar quantos elementos forem precisos, não há um limite
        de items para concatenar.
        Por exemplo
    */
    $var1 = 'Jonas';
    $var2 = 'Santos';

    echo 'Meu nome é : '.$var1.' '.$var2.'.';
    echo'<br>';

    // Também temos como concatenar usando aspas simples e {}
    /*
        Outra forma de concatenar e mais simples é com aspas duplas
        e abrindo pares de conchetes para passar os elementos que 
        queremos concatenar, Por exemplo:
    */

    echo "Meu nome é : {$var1} {$var2}.";

?>