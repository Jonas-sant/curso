<?php
/*  Usamos os métodos $_GET ou $_POST para recuperar dados de um formulário
em PHP dependendo do método que usamos no nosso formulário 

    caso esteja usando método get em seu formulário
    var_dump($_GET);
    $name= $_GET['name'];

    caso esteja usando método post em seu formulário
    var_dump($_POST);
    $name = $_POST['name'];


    echo "Olá {$name}";
*/

/*  Também podemos usar o método $_REQUEST  para pegar os dados, e trabalha independente do método
que estivermos usando em um formulário, porém seu processamento é mais lento pois pega todos
os tipos de dados sejam post,get ou session.
seu modo de usar é semelhante aos outros métodos
*/
var_dump($_REQUEST);
echo "<br>";
echo $_REQUEST['name'];

?>