<?php
/* 
    O PHP tem algus métodos para criptografar strings
   e deixar as coisas um pouco mais seguras, por exemplo na hora
   de salvar passwords em nosso banco de dados, ou enviar menssagens
   criptografadas para que só um usuário especifico saiba o conteúdo
   da menssagem.     
*/

 /* Criptografia MD5, esse tipo de criptografia é a mais utilizada 
 irá gerar um hash de 32 caracteres e usa um algoritmo de 128bits o
 modo de utilização é bem fácil basta invocar o método md5() e passar
 como parâmetro a string que vamos codificar. Por exemplo: */

 echo "<h1>Criptografia d5</h1><br>";

 $str = "Code Devs";
 echo "Exemplo de criptografia md5 normal : ";
 echo md5($str)."<br>";

 /* O problema de usarmos este tipo de codificação é que ela sempre nos retornara 
o mesmo hash, por isso por segurança é sempre bom combinar alguns caracteres com 
a string que ira criptografar para dificultar a quebra da codificação. Por exemplo:  
    O algoritmo de criptografia MD5 é unidirecional por isso uma vez codificado
não há como reverter.
*/
$salt = 'As%wD#Vwas$';
 echo "Criptográfia md5 mais segura : "; 
 echo md5($str.$salt);    
 echo "<hr>";   

 /* Além do md5 temos o sha1  que gera uma string de 40 caracteres e usa u algoritmo 
 de 160bits */
echo "<h1>Criptografia SHA1</h1><br>";

echo "Exemplo de criptografia sha1 : ";
echo sha1($str)."<br>";
echo "Exemplo de criptografia sha1 mais segura : ";
echo sha1($str.$salt)."<br>";
echo "<hr>";    


/*  Temos a opção de criptografia crypt que gera um hash menor.
  passamos 2 parametros para o método crypt(), o primeiro é a string
  que queremos codificar e o segundo é uma palavra de segurança para
  reforçar a segurança da hash que será gerada.
*/
echo "<h1>Criptografia com o método crypt()</h1><br>";
echo "Usando o método crypt() : ";
echo crypt($str,$salt);
echo "<hr>";


/* Temos o método base64 que diferente dos métodos aprendidos até agora podemos
criptografar e descriptografar as menssagens.
    Para criptografar usamos o método base64_encode(), passando como parametro a
string que queremos codificar.Por exemplo:
*/
echo "<h1>Criptografia usando base64() </h1>";
echo "Criptografia usando base64_encode() : ";
$strCript = base64_encode($str);
echo $strCript;
echo "<br>";
/* Para decodificar essa basta usarmos o método base64_decode(), passando como parametro
a string codificada */
echo "Descriptografando com base64_decode() : ";
echo base64_decode($strCript);
echo "<h1>";
/*  hash() considerado o método mais seguro de todos, ele gera um hash de 128 caracteres.
  Temos de passar 2 parâmetros o primeiro é o tipo de criptografia que iremos utilizar e 
  o segundo é a string que iremos encriptar, vamos trabalhar com a criptografia sha512, 
  mas o método hash() aceita vários outros tipos de criptografia.

*/
echo "<h1>Criptografia usando hash()</h1>";
echo hash('sha512',$password);

?>