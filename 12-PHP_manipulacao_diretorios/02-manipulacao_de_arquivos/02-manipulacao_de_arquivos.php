<?php
/* Vamos a função file_put_contents() que serve para escrever
arquivos. Para usar esta função chamamos ela e passamos dois 
parametros o primeiro é o caminho+nome do arquivo e o segundo
é o conteúdo do que iremos escrever no arquivo. Por exemplo:
Este comando acaba substituindo o conteúdo do arquivo pelo conteúdo 
que iremos passar no método.*/

var_dump(file_put_contents('./arquivos/novo_test.txt','Jonas Wednes Santos da Silva'));
echo "<hr>";


/* Da mesma maneira que temos como escrever arquivos podemos apenas
lê-los usando a função file_get_contents(), e passar como parametro
o caminho+nome do arquivo, por exemplo */

var_dump(file_get_contents('./arquivos/novo_test.txt'));

?>