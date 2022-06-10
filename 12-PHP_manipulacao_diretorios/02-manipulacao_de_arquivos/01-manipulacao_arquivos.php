<?php
/*  Como primeiro método temos o touch() que serve para criar um arquivo
    invocamos a function e passamos como parametro o nome do arquivo que 
    iremos criar
*/
var_dump(mkdir('./arquivos',));//Criando um diretório arquivos
var_dump(touch('./arquivos/test.txt',0777));//criando um arquivo dentro do diretório criado
echo "<hr>";

/* Também podemos renomear um arquivo ja criado com o método rename()
passando como parametro o nome antigo e o novo nome do arquivo. Por exemplo: 
*/
var_dump(rename('./arquivos/test.txt','./arquivos/novo_test.txt'));
echo "<br>";


/*  
Também temos uma function para verificar se caso existe um arquivo em nosso diretório
chamado file_exists(), onde passamos o nome do arquuivo e a function nos retorna um true caso exista
ou false caso não exista
*/

var_dump(file_exists('./arquivos/novo.txt'));


/*
    Também temos a possibilidade de copiar arquivos existentes para outros diretórios
    usando a function copy() e passando o caminho+nome do arquivo e onde queremos que
    ele seja copiado. Por exemplo:
*/
var_dump(copy('./arquivos/novo_test.txt','./test_copy.txt'));
echo "<br>";


/*
    Também temos o comando para excluir um arquivo, chamamos de unlink() e 
passamos como parametro o caminho+nome do arquivo que vamos apagar. 
    Por Exemplo : 
*/
var_dump(unlink('test_copy.txt'))


?>