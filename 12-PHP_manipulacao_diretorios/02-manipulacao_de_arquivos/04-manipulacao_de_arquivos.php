<?php
//Aqui vamos usar apenas o modo de apenas leitura.

$file = fopen('projeto.log','r');

/* Vamos usar o método fgets() para fazer a leitura das linhas do documento, passamos dois 
parametros o primeiro é a abertura do documento que declaramos em file e como segundo parametro
passamos a quantidade de caracteres que queremos exibir.Porém esse método traz somente a 
primeira linha do arquivo. */
echo "trazendo apenas a primeira linha do arquivo.";
echo fgets($file,'5')."<br>";
echo "<hr>";


/* Para percorrer cada linha do arquivo temos o método feof, este método percorrera linha por linha
e retornara true enquanto houverem linhas para ser lidas no arquivos, e false quando não encontrar mais linhas. */
echo "Restante do arquivo<br>";
while(!feof($file)){
    echo fgets($file,'40')."<br>";
}
//E como via de regra da biblioteca fopen, é preciso fechar todo arquivo que for aberto.
fclose($file);


?>