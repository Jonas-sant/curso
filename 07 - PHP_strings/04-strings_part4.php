<?php
    /*  Métodos de verificação */

    /* Método isset, faz uma checagem para saber se existe a variável
    caso exista retorna um true caso não exista retorna false
    */
    $name = "Jonas";

    if(isset($name))
    {
        echo "checando com isset() : <br>";
        echo $name."<br>";
    }

    /* Na contramão do isset temos o unset para que se caso exista a váriavel
       ela sea deltada. 
    */

    unset($name);

    if(isset($name)){
        echo "A variável ainda existe";
    }else{
        echo "A variável já não existe mais";
    }
?>