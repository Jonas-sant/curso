<?php   
/*  O primeiro comando sobre  a manipulação de diretórios é o comando is_dir()
que serve para verificar se o alvo é um diretório ou não,usamos da seguinte
maneira: 
  Chamamos a função is_dir() e passamos como parametro o nome do arquivo
  e ele ira nos retornar um verdadeiro ou falso.
Por exemplo: 
*/
//Caso retorne false o arquivo não representa um diretório
//Caso retorne true significa que é um diretório
var_dump(is_dir('abc'));


/* Para criarmos um diretório usamos a function mkdir(), passando primeiramente o caminho
* concatenado com o nome do diretório e separado por virgula o tipo de permissão(chmod()) 
da pasta(isso pode ser iguinorado caso estejamos usando o windows).Por exemplo:    
*/
$path = './diretorio';
var_dump(mkdir($path.'/sec_dir',0777));//O retorno será verdadeiro se a criação tiver ocorrido bem e falso caso a criação não tenha ocorrido

/* Também temos o comando para remover diretórios que funciona de modo
igual o is_dir() basta apenas invocarmos a function e passar como parametro
o diretório que queremos apagar. Exemplo: */

var_dump(rmdir('diretorio/new_dir'));
//Também retorna um verdadeiro ou falso, de acordo com o sucesso do código

/*  Também temos um comando para descobrirmos em qual diretório estamos se chama 
getcwd(),
*/
var_dump(getcwd());

/*
    Temos o scandir() que nos mostra tudo o que temos naquele diretório
passamos como parametro o caminho do diretório
*/
echo "<hr>";
echo "<pre>";
var_dump(scandir("."));
echo "</pre>";
echo "<hr>";



/*   Com a mesma finalidade da function scandir(), porém precisamos passar algumas
regras para trazer arquivos especificos, por exemplo:
*/

echo "<pre>";
var_dump(glob("../../09-PHP_upload_de_imagens/*.html"));
echo "</pre>";
echo "<hr>";
/* Neste caso de teste passamos para nossa função glob o caminho do diretorio
e usamos o * para dizer que queremos todos os arquivos do tipo .html */

?>