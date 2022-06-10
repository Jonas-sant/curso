<?php
/* Sessions é uma maneira de salvar e passar dados para outras páginas
sem precisar fazer o include do arquivo que contém as váriaveis. Por 
exemplo, vamos declarar algumas váriaveis aqui e imprimi-las no arquivo
02-get_session.php: 
*/
//Começamos iniciando uma session com o comando session_start();
session_start();

//Depois de iniciarmos vamos definir algumas váriaveis da nossa SESSION
$_SESSION['name'] = "Jonas";




?>