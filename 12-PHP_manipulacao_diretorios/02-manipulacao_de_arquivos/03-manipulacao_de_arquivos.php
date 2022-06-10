<?php
/*
  O uso da biblioteca fopen é o mais versátil para utilizarmos quando falamos na manipulação
  leitura e escrita de arquivos, pois podemos ter mais liberdade na hora de manipular os arquivos 
  e o melhor o conteúdo   

  Agora vamos utilizar a biblioteca fopen para manipular arquivos.
  A mecanica do fopen funciona da mesma forma como se estivemos abrindo um arquivo pessoalmente
utilizamos o método fopen() passando dois parametros, o primeiro é o nome do arquivo e o segundo
é o mode, onde especificamos para que abriremos aquele arquivo(Lista dos possíveis modos de fopen() utilizando mode - https://www.php.net/manual/pt_BR/function.fopen.php),  
 Por exemplo:     
*/
    $file = fopen('projeto.log','a+');
    /* Neste caso declaramos a variavel $file e passamos o método fopen com o mode 
    a+ que indica que queremos ler e escrever neste arquivo e se caso não exista o 
    arquivo com o nome passado, ele tenta cria-lo */


    fwrite($file, "Hoje é sexta-feira.\r\n");
/*
    Com o método fwrite() é onde passamos o que queremos escrever dentro do nosso arquivo
passamos dois parametros para essa função o primeiro é o arquivo que está aberto e o segundo
é o que queremos escrever no arquivo.
*/

/* Da mesma maneira que abrimos o arquivo com o método fopen() precisamos fecha-lo
e para isso usamos o método fclose() e passamos a variavel que foi declarada para a
abertura do arquivo. */    
    fclose($file);
?>