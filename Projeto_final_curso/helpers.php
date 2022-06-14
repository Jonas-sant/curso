<?php

function getAlbuns(){
    $albuns = glob('./assets/albuns/*');

    return $albuns;
}




?>