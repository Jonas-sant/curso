<?php
/* Os cookies são importantes para poder mantermos salvos alguns dados do lado do
cliente e assim "facilitar" a vida dso nossos usuários por exemplo, quando você
faz seu login em algum site e depois fecha o site e no outro após acessar o mesmo site
você cntinua logado, isso só é possivel atráves dos cookies.
   Podemos criar cookies para salvar as preferencias do nosso usúario, para criarmos um cookie
precisamos invocar uma função nativa do php chamada setcookie() passando alguns parametros:
O primeiro parametro é o nome do cookie, o segundo é o valor do nosso cookie,
o terceiro é o tempo de expiração em segundos e o quarto é onde iremos guardar este cookie

    Vamos criar um cookie de exemplo : 
*/

setcookie('cookie-test', 'Cookie para test',time()+20);

echo $_COOKIE['cookie-test'];

?>