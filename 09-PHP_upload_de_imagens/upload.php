<?php

$upload = $_FILES['upload_img'];
/* Para especificar o caminho do diretório usamos o ponto no ínicio para 
especificar que estamos partindo da pasta em que estamos, seguido da barra,
o nome da pasta e outra barra no final para indicarmos que será dentro do diretório.
Exemplo: */
$path = "./imgs/";
/*
  Para fazer o upload usamos uma função do próprio php que usa chama 
move_uploaded_file() , que recebe 2 parâmetros o caminho do arquivo 
que queremos fazer o upload e o diretório aonde iremos salver seguido
do nome que iremos dar para nossa imagem. Por exemplo:
  Caso esteja usando linux ubuntu lembre-se de dar as permissões a pasta 
onde esta usando, pois o script dependera destas permissões para salvar 
criar e modificar os arquivos que serão salvoss
*/

echo (move_uploaded_file($upload["tmp_name"], $path.$upload["name"])) ? "Sucesso" :"Falhou!";

/* No exemplo pegamos o caminho temporario da imagem que estava na propriedade
'tmp_name' e então após a virgula, passamos o diretório concatenando o nome que 
queremos dar a nossa imagem, no exemplo pegamos o nome da própria imagem que veio 
do upload mas poderia ser qualquer outro nome. 
*/

/*                    UPLOAD-DE-MULTIPLOS-ARQUIVOS
-------------------------------------------------------------------------------
  A mecanica do upload de multiplos arquivo funciona da mesma maneira que funciona
o upload de um unico porém, usamos um for para fazer o upload de cada arquivo que foi
enviado pelo usuário.

  Em uma explicação de modo simples, o upload de multiplos arquivos funciona como uma
lista de arquivos enviados pelo usuário, então usamos o for para guardar uma imagem de
cada vez, até finalizarmos a lista de arquivos.
*/

$pdfPath = "./pdfs/";
$arquivo = $_FILES['pdfs'];

for($i=0; $i<count($arquivo['name']); $i++){

  
  echo(move_uploaded_file($arquivo["tmp_name"][$i],$pdfPath.$arquivo["name"][$i]))? "Success":"Fail";
}

?>
