<?php
    /*  FUNÇÃO DATE NO PHP   */

    /*  Temos muitas funções para manipulação de datas, para 
        isso vamos usar o método date()
    */

    echo "Manipulação de Anos(YEARS)<br>";
    echo "Para exibir o ano atual com 2 digitos ( date('y') ): ".date('y')."<br>";
    echo "Para exibirmos o ano atual com 4 digitos ( date('Y') )".date('Y')."<br>";
    echo "<hr>";

    echo "Manipulação de Meses<br>";
    echo "Para mostrar o mês por escrito ( date('m') ) : ".date('M')."<br>";
    echo "Para mostrar o mês usando digito ( date('M') ) : ".date('m')."<br>";
    echo "<hr>";

    echo "Manipulação de dias<br>";
    echo "Para mostrar o dia por escrito (date('D') ) : ".date('D')."<br>";
    echo "Para mostrar o dia usando digito ( date('d') ) : ".date('d')."<br>";  
    echo "<hr>";

    echo "Para exibir a data completa 'dia/mes/ano' ( date('d/m/y') ) : ".date('d/m/y')."<br>";
    echo "Para exibir a data completa por escrito ( date('D/M/Y') ) : ".date('D, M, Y')."<br>";
    echo "<hr>";


    /* 
     Para trabalharmos com horas, temos a possibilidade de setar o Timezone que vamos usar
    no caso usaremos o fuso horário 'America/Sao_Paulo'.
     Para saber qual fuso horário estamos usando no momento usamos o método
    date_default_timezone_get() 
     Para setarmos um fuso horário diferente do que estamos, usamos o método
    date_default_timezone_set('Fuso Horário desejado');
    */
    date_default_timezone_set('Asia/Tokyo');
    echo "Timezone atual : ".date_default_timezone_get()."<br>";

    echo "Manipulação de horas<br>";
    echo "Hora em formato 12 horas ( date('h') ) : ".date('h')."<br>";
    echo "Hora em formato 24 horas ( date('H') ) : ".date('H')."<br>";

    echo "Exibindo Minutos ( date('i') ) : ".date('i')."<br>";
    echo "Exibindo os segundos ( date('s') ) : ".date('s')."<br>";
    echo "Exibindo a hora completa ( date('H:i:s') ) : ".date('H:i:s')."<br>";
    



?>