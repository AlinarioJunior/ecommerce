<?php

function __autoload($nomeClase){

    //var_dump($nomeClase);

    require_once("$nomeClase.php");
}


$carro = new DelRey();

$carro->acelerar(80);


?>